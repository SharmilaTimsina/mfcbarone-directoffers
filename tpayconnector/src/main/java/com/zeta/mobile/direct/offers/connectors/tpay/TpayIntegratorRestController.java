package com.zeta.mobile.direct.offers.connectors.tpay;

import java.util.Date;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.zeta.mobile.direct.offers.admin.generic.ResponseStatus;
import com.zeta.mobile.direct.offers.admin.services.subscription.CustomersService;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.ChangeSubscriptionStatusRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.SendMTRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.SubscriptionPayRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.TpayAddSubscriptionRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.VerifySubscriptionRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.ChangeSubscriptionStatusResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.SendMTResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.SubscriptionPayResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.TPAYAddSubscriptionResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.VerifySubscriptionResponse;
import com.zeta.mobile.direct.offers.entities.CampaignOffer;
import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.entities.Customer;
import com.zeta.mobile.direct.offers.entities.Impression;
import com.zeta.mobile.direct.offers.entities.Subscription;
import com.zeta.mobile.direct.offers.entities.helpers.SalesChannel;
import com.zeta.mobile.direct.offers.repository.CampaignOffersRepository;
import com.zeta.mobile.direct.offers.repository.CarriersRepository;
import com.zeta.mobile.direct.offers.repository.ImpressionsRepository;
import com.zeta.mobile.direct.offers.repository.SubscriptionsRepository;

@RestController
@RequestMapping("subscriptions")
public class TpayIntegratorRestController {

	@Autowired
	private CampaignOffersRepository campaingsOffersRepo;

	@Autowired
	private SubscriptionsRepository subscriptionsRepo;

	@Autowired
	private CarriersRepository carriersRepo;

	@Autowired
	private ImpressionsRepository impressionsRepo;

	@Autowired
	private CustomersService customerService;

	final static Logger logger = Logger.getLogger(TpayIntegratorRestController.class);

	private final String TPAYCONNECTOR = "tpay.integrator";

	@RequestMapping(value = "/add/request", method = RequestMethod.PUT, produces = "application/json")
	public TPAYAddSubscriptionResponse addSubscription(@RequestBody TpayAddSubscriptionRequest request) {
		TPAYAddSubscriptionResponse response = new TPAYAddSubscriptionResponse();

		if (request.getMsisdn() == null) {
			logger.error("new subscription request failed: Msisdn can not be null");
			response.setStatus(ResponseStatus.MSISDN_IS_NULL);
			return response;
		}

		if (request.getOperatorCode() == null) {
			logger.error("new subscription request failed|" + request.getMsisdn() + " : CarrierId can not be null");
			response.setStatus(ResponseStatus.CARRIER_NOT_FOUND);
			return response;
		}

		if (request.getImpressionId() == null) {
			logger.error("new subscription request failed|" + request.getMsisdn() + "|" + request.getOperatorCode()
					+ " : ImpressionId can not be null");
			response.setStatus(ResponseStatus.IMPRESSION_IS_NULL);
			return response;
		}

		logger.info(request.getOperatorCode() + "|" + request.getMsisdn() + "|new subscription request -> "
				+ request.toString());

		Carrier carrier = carriersRepo.findByNetworkCode(request.getOperatorCode());

		// check if carrier is configured
		if (carrier == null) {
			logger.error(request.getOperatorCode() + "|" + request.getMsisdn() + " : CarrierId not found ->"
					+ request.getOperatorCode());
			response.setStatus(ResponseStatus.CARRIER_NOT_FOUND);
			return response;
		}

		Impression impression = impressionsRepo.findById(request.getImpressionId());

		if (impression == null) {
			logger.error(request.getOperatorCode() + "|" + request.getMsisdn() + " : Impression Id not found ->"
					+ request.getImpressionId());
			response.setStatus(ResponseStatus.IMPRESSION_NOT_FOUND);
			return response;
		}

		SalesChannel salesChannel = null;

		if (request.getHeaderEnrichmentReferenceCode() == null && request.isSendVerificationSMS() == false) {
			logger.error(request.getOperatorCode() + "|" + request.getMsisdn()
					+ " : HeaderEnrichmentReferenceCode is null and sendVerificationSMS is setted to false");
			response.setStatus(ResponseStatus.UNDEFINED_SALES_CHANNEL);
			return response;
		} else if (request.getHeaderEnrichmentReferenceCode() != null && request.isSendVerificationSMS() == false) {
			salesChannel = SalesChannel.GSM;
		}

		CampaignOffer campaignOffer = campaingsOffersRepo.findByOperatorIdAndCampaignId(carrier.getId(),
				impression.getCampaign().getId());

		if (campaignOffer == null) {
			logger.error(request.getOperatorCode() + "|" + request.getMsisdn() + " : Campaign Offer not found ->"
					+ "carrierId: " + carrier.getId() + " CampaignId: " + impression.getCampaign().getId());
			response.setStatus(ResponseStatus.IMPRESSION_NOT_FOUND);
			return response;
		}

		Customer customer = customerService.findOrCreate(request.getMsisdn(), carrier, TPAYCONNECTOR,
				impression.getBrowserlanguage());

		logger.info(request.getOperatorCode() + "|" + request.getMsisdn() + "| customer id" + customer.getId());

		// TODO verify if user already subscribed
		Subscription newSubscription = new Subscription();
		newSubscription.setCustomer(customer);
		newSubscription.setImpression(impression);
		newSubscription.setSalesChannel(salesChannel);

		if (salesChannel.equals(SalesChannel.GSM)) {
			newSubscription.setSalesChannelExternalRef(request.getHeaderEnrichmentReferenceCode());
			newSubscription.setIsSendVerification(false);
		} else if (salesChannel.equals(SalesChannel.WIRELESS)) {
			newSubscription.setSalesChannelExternalRef(null);
			newSubscription.setIsSendVerification(true);
		}

		newSubscription.setCreatedby(TPAYCONNECTOR);
		newSubscription.setCreationdate(new Date());
		newSubscription.setExternalid(null);
		newSubscription.setIsAutoRenew(campaignOffer.getPricepointplan().getIsAutoRenew());

		// newSubscription.setNextrenewdate(nextrenewdate);
		// newSubscription.setEndDate(endDate);
		// newSubscription.setListOfSubscriptionsStatus(listOfSubscriptionsStatus);
		//
		// response.getRequest().setContractEndDate(contractEndDate);
		// response.getRequest().setContractStartDate(contractStartDate);
		// response.getRequest().setSubscriptionPlanId(subscriptionPlanId);
		// response.getRequest().setInitialPaymentDate(initialPaymentDate);
		// response.getRequest().setInitialPaymentproductId(initialPaymentproductId);
		// response.getRequest().setProductCatalogName(productCatalogName);
		// response.getRequest().setRecurringPaymentproductId(recurringPaymentproductId);

		response.getRequest().setHeaderEnrichmentReferenceCode(newSubscription.getSalesChannelExternalRef());
		response.getRequest().setSendVerificationSMS(newSubscription.getIsSendVerification());

		// newSubscription.set

		/// TPAY REQUEST CONSTRUCTION
		response.getRequest().setLanguage(customer.getLanguage());
		response.getRequest().setMsisdn(customer.getMsisdn());
		response.getRequest().setOperatorCode(customer.getCarrier().getNetworkCode());
		response.getRequest().setImpressionId(impression.getId());
		response.getRequest().setCustomerAccountNumber(customer.getId());

		/// TPAY DEFAULTS TODO CHECK THEIR LOGIC
		response.getRequest().setAllowMultipleFreeStartPeriods(false);
		response.getRequest().setExecuteInitialPaymentNow(false);
		response.getRequest().setAutoRenewContract(true);
		response.getRequest().setExecuteRecurringPaymentNow(false);

		response.setStatus(ResponseStatus.OK);
		return response;
	}

	@RequestMapping(value = "/verify", method = RequestMethod.POST, produces = "application/json")
	public VerifySubscriptionResponse verifySubscription(@RequestBody VerifySubscriptionRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/changeStatus", method = RequestMethod.POST, produces = "application/json")
	public ChangeSubscriptionStatusResponse changeSubscriptionStatus(
			@RequestBody ChangeSubscriptionStatusRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/payment", method = RequestMethod.POST, produces = "application/json")
	public SubscriptionPayResponse subscriptionPayment(@RequestBody SubscriptionPayRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/sendMT", method = RequestMethod.PUT, produces = "application/json")
	public SendMTResponse sendMt(@RequestBody SendMTRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	/* REQUEST OBJECT EXAMPLES */
	@RequestMapping(value = "/add/example", method = RequestMethod.GET, produces = "application/json")
	public TpayAddSubscriptionRequest addSubscriptionExample() {
		TpayAddSubscriptionRequest request = new TpayAddSubscriptionRequest();
		return request;
	}

	@RequestMapping(value = "/verify/example", method = RequestMethod.GET, produces = "application/json")
	public VerifySubscriptionRequest verifySubscriptionExample() {
		VerifySubscriptionRequest request = new VerifySubscriptionRequest();
		return request;
	}

	@RequestMapping(value = "/changeStatus/example", method = RequestMethod.GET, produces = "application/json")
	public ChangeSubscriptionStatusRequest changeSubscriptionStatusExample() {
		ChangeSubscriptionStatusRequest request = new ChangeSubscriptionStatusRequest();
		return request;
	}

	@RequestMapping(value = "/payment/example", method = RequestMethod.GET, produces = "application/json")
	public SubscriptionPayRequest SubscriptionPayRequestExample() {
		SubscriptionPayRequest request = new SubscriptionPayRequest();
		return request;
	}

	@RequestMapping(value = "/sendMT/example", method = RequestMethod.GET, produces = "application/json")
	public SendMTRequest sendMtExample() {
		SendMTRequest request = new SendMTRequest();
		return request;
	}
}
