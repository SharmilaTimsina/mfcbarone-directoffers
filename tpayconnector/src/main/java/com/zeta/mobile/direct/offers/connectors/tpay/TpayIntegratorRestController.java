package com.zeta.mobile.direct.offers.connectors.tpay;

import java.security.SecureRandom;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.apache.commons.lang3.StringUtils;
import org.apache.commons.lang3.time.DateUtils;
import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.zeta.mobile.direct.offers.admin.generic.ResponseStatus;
import com.zeta.mobile.direct.offers.admin.services.subscription.CustomersService;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.TpayAddSubscriptionRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.TpayResponseToAddSubscriptionRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.VerifySubscriptionRequest;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.TPAYAddSubscriptionResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.TpayResponseToAddSubscriptionResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.responses.VerifySubscriptionResponse;
import com.zeta.mobile.direct.offers.entities.CampaignOffer;
import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.entities.Customer;
import com.zeta.mobile.direct.offers.entities.Impression;
import com.zeta.mobile.direct.offers.entities.Subscription;
import com.zeta.mobile.direct.offers.entities.SubscriptionStatus;
import com.zeta.mobile.direct.offers.entities.helpers.SalesChannel;
import com.zeta.mobile.direct.offers.entities.helpers.UserSubscriptionStatus;
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

		// TODO VALIDADE MSISDN
		// final Pattern pattern = Pattern.compile(carrier.getMsisdnRegexValidation());
		// if (!pattern.matcher(request.getMsisdn()).matches()) {
		// logger.error(request.getOperatorCode() + "|" + request.getMsisdn() + " :
		// Invalid MSISDN to this carrier");
		// response.setStatus(ResponseStatus.INVALID_MSISDN);
		// return response;
		// }

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
		} else if (request.isSendVerificationSMS() == true) {
			salesChannel = SalesChannel.WIRELESS;
		}

		CampaignOffer campaignOffer = campaingsOffersRepo.findByOperatorAndCampaign(carrier, impression.getCampaign());

		if (campaignOffer == null) {
			logger.error(request.getOperatorCode() + "|" + request.getMsisdn() + " : Campaign Offer not found ->"
					+ "carrierId: " + carrier.getId() + " CampaignId: " + impression.getCampaign().getId());
			response.setStatus(ResponseStatus.CAMPAIGN_OFFER_NOT_FOUND);
			return response;
		}

		// TODO VALIDATION CHECK IF IMPRESSION ALREADY HAVE A SUBSCRIPTION

		// TODO VALIDATION CHECK IF USER ALREADY SUBSCRIBED TO THIS SERVICE

		Customer customer = customerService.findOrCreate(request.getMsisdn(), carrier, TPAYCONNECTOR,
				impression.getBrowserlanguage());

		logger.info(request.getOperatorCode() + "|" + request.getMsisdn() + "| customer id" + customer.getId());

		Subscription newSubscription;

		newSubscription = subscriptionsRepo.findByCustomerAndCampaignOffer(customer, campaignOffer);

		if (newSubscription != null) {
			SubscriptionStatus subStatus = newSubscription.getListOfSubscriptionsStatus().get(0);
			if (!subStatus.getStatus().equals(UserSubscriptionStatus.FAILED)
					&& !subStatus.getStatus().equals(UserSubscriptionStatus.REQUESTED)) {
				logger.error("new subscription request failed: User already subscribed on the service");
				response.setStatus(ResponseStatus.USER_ALREADY_SUBSCRIBED);
				return response;
			}
		} else {
			newSubscription = new Subscription();
		}

		newSubscription.setCustomer(customer);
		newSubscription.setImpression(impression);
		newSubscription.setSalesChannel(salesChannel);
		newSubscription.setCampaignOffer(campaignOffer);

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

		Date nowDate = new Date();
		Date contractInitDate = DateUtils.addMinutes(nowDate, 1);
		Date contractInitPayDate = DateUtils.addMinutes(nowDate, 2);
		Date contratEndDate = DateUtils.addYears(new Date(), 10);

		newSubscription.setNextrenewdate(contractInitPayDate);
		newSubscription.setStartDate(null);
		newSubscription.setRequestDate(contractInitDate);
		newSubscription.setEndDate(contratEndDate);

		SubscriptionStatus status = new SubscriptionStatus();
		status.setStatus(UserSubscriptionStatus.REQUESTED);
		status.setStatusDate(new Date());
		status.setStatusReason("requested to partner");
		status.setSubscription(newSubscription);
		List<SubscriptionStatus> statusList = new ArrayList<SubscriptionStatus>();
		statusList.add(status);

		newSubscription.setListOfSubscriptionsStatus(statusList);

		newSubscription = subscriptionsRepo.save(newSubscription);

		response.getRequest().setSubscriptionPlanId(newSubscription.getCampaignOffer().getExternalId());

		response.getRequest()
				.setInitialPaymentproductId(newSubscription.getCampaignOffer().getPricepointplan().getExternalId());

		response.getRequest().setProductCatalogName(newSubscription.getCampaignOffer().getCampaign().getExtenalid());
		response.getRequest()
				.setRecurringPaymentproductId(newSubscription.getCampaignOffer().getPricepointplan().getExternalId());

		/// TPAY REQUEST CONSTRUCTION
		response.getRequest().setAutoRenewContract(campaignOffer.getPricepointplan().getIsAutoRenew());
		response.getRequest().setHeaderEnrichmentReferenceCode(newSubscription.getSalesChannelExternalRef());
		response.getRequest().setSendVerificationSMS(newSubscription.getIsSendVerification());
		response.getRequest().setLanguage(customer.getLanguage());
		response.getRequest().setMsisdn(customer.getMsisdn());
		response.getRequest().setOperatorCode(customer.getCarrier().getNetworkCode());
		response.getRequest().setImpressionId(impression.getId());
		response.getRequest().setCustomerAccountNumber(customer.getId());
		response.getRequest().setContractEndDate(contratEndDate);
		response.getRequest().setContractStartDate(contractInitDate);
		response.getRequest().setInitialPaymentDate(contractInitDate);

		response.getRequest().setAllowMultipleFreeStartPeriods(false);
		response.getRequest().setExecuteInitialPaymentNow(false);
		response.getRequest().setExecuteRecurringPaymentNow(false);
		response.setStatus(ResponseStatus.OK);

		response.setSubscriptionId(newSubscription.getId());

		logger.info(request.getOperatorCode() + "|" + request.getMsisdn() + "| finish subscription request -> "
				+ response.toString());
		return response;
	}

	@RequestMapping(value = "/add/response", method = RequestMethod.POST, produces = "application/json")
	public TpayResponseToAddSubscriptionResponse addSubscriptionResponse(
			@RequestBody TpayResponseToAddSubscriptionRequest request) {

		TpayResponseToAddSubscriptionResponse response = new TpayResponseToAddSubscriptionResponse();

		if (request.getSubscriptionId() == null) {
			logger.error("new subscription request failed: subscriptionId can not be null");
			response.setStatus(ResponseStatus.SUBSCRIPTION_ID_IS_NULL);
			return response;
		}

		Subscription subscription = subscriptionsRepo.findById(request.getSubscriptionId());
		if (subscription == null) {
			logger.error("new subscription request failed: subscription not found");
			response.setStatus(ResponseStatus.SUBSCRIPTION_NOT_EXISTS);
			return response;
		}

		logger.info(subscription.getCampaignOffer().getCarrier().getNetworkCode() + "|"
				+ subscription.getCustomer().getMsisdn() + "|" + subscription.getId()
				+ "| new subscription request answer -> " + request.toString());

		SubscriptionStatus subStatus = subscription.getListOfSubscriptionsStatus().get(0);

		if (subStatus.getStatus().equals(UserSubscriptionStatus.REQUESTED)
				|| subStatus.getStatus().equals(UserSubscriptionStatus.FAILED)) {
			if (StringUtils.equalsIgnoreCase(request.getOperationStatusCode(), "Success")
					&& (StringUtils.equalsIgnoreCase(request.getSubscriptionContractStatus(), "New")
							|| StringUtils.equalsIgnoreCase(request.getSubscriptionContractStatus(), "Active"))) {

				if (request.getSubscriptionContractId() == null) {
					SubscriptionStatus newStatus = new SubscriptionStatus();
					newStatus.setStatus(UserSubscriptionStatus.FAILED);
					newStatus.setStatusDate(new Date());
					newStatus.setSubscription(subscription);
					newStatus.setStatusReason("Subscription contract id  is null");
					subscription.getListOfSubscriptionsStatus().add(newStatus);
					subscriptionsRepo.save(subscription);

					logger.error(subscription.getCampaignOffer().getCarrier().getNetworkCode() + "|"
							+ subscription.getCustomer().getMsisdn() + "|"
							+ "subscription failed: external id can not be null");
					response.setStatus(ResponseStatus.SUBSCRIPTION_CONTRACT_ID_IS_NULL);
					return response;
				}

				if (request.getNextPaymentDate() == null) {
					SubscriptionStatus newStatus = new SubscriptionStatus();
					newStatus.setStatus(UserSubscriptionStatus.FAILED);
					newStatus.setStatusDate(new Date());
					newStatus.setSubscription(subscription);
					newStatus.setStatusReason("Subscription nextrenew date is null");
					subscription.getListOfSubscriptionsStatus().add(newStatus);
					subscriptionsRepo.save(subscription);

					logger.error(subscription.getCampaignOffer().getCarrier().getNetworkCode() + "|"
							+ subscription.getCustomer().getMsisdn() + "|" + "subscription failed: Invalid renew date");
					response.setStatus(ResponseStatus.INVALID_RENEW_DATE);
					return response;
				}

				SubscriptionStatus newStatus = new SubscriptionStatus();

				if (StringUtils.equalsIgnoreCase(request.getSubscriptionContractStatus(), "New")) {
					newStatus.setStatus(UserSubscriptionStatus.PREACTIVE);
				} else if (StringUtils.equalsIgnoreCase(request.getSubscriptionContractStatus(), "Active")) {
					newStatus.setStatus(UserSubscriptionStatus.ACTIVE);
				}
				newStatus.setStatusDate(new Date());
				newStatus.setSubscription(subscription);
				newStatus.setStatusReason("Tpay add new subscription contract success response");

				subscription.setNextrenewdate(request.getNextPaymentDate());
				subscription.setExternalid(request.getSubscriptionContractId());
				subscription.setStartDate(new Date());

				if (subscription.getIsSendVerification() == false) {
					subscription.setAccessToken(generateAccessKey());
				}

				subscription.getListOfSubscriptionsStatus().add(newStatus);

				response.setSubscriptionId(subscription.getId());
				response.setSubscriptionStatus(newStatus.getStatus());
				subscriptionsRepo.save(subscription);

				if (subscription.getIsSendVerification() == false) {
					response.setAccessToken(subscription.getAccessToken());
				}

				response.setStatus(ResponseStatus.OK);
				return response;
			} else {
				SubscriptionStatus newStatus = new SubscriptionStatus();
				newStatus.setStatus(UserSubscriptionStatus.FAILED);
				newStatus.setStatusDate(new Date());
				newStatus.setSubscription(subscription);
				newStatus.setStatusReason(request.getSubscriptionContractStatus() + ": " + request.getErrorMessage());
				subscription.getListOfSubscriptionsStatus().add(newStatus);
				subscriptionsRepo.save(subscription);

				logger.error("new subscription request failed: response status is not Success ");
				response.setStatus(ResponseStatus.SUBSCRIPTION_FAIL_ON_PARTNER);
				return response;
			}
		} else {
			logger.error("new subscription request failed: subscription status is not REQUESTED ");
			response.setStatus(ResponseStatus.SUBSCRIPTION_REQUEST_ALREADY_ANSWER);
			return response;
		}
	}

	@RequestMapping(value = "/verify/pin", method = RequestMethod.POST, produces = "application/json")
	public VerifySubscriptionResponse verifyPinCode(@RequestBody VerifySubscriptionRequest request) {

		VerifySubscriptionResponse response = new VerifySubscriptionResponse();

		if (request.getSubscriptionId() == null) {
			logger.error("new subscription request failed: subscriptionId can not be null");
			response.setStatus(ResponseStatus.SUBSCRIPTION_ID_IS_NULL);
			return response;
		}

		Subscription subscription = subscriptionsRepo.findById(request.getSubscriptionId());
		if (subscription == null) {
			logger.error("new subscription request failed: subscription not found");
			response.setStatus(ResponseStatus.SUBSCRIPTION_NOT_EXISTS);
			return response;
		}

		if (subscription.getIsSendVerification() == false) {
			logger.error("new subscription request failed: subscription is not in pin code flow");
			response.setStatus(ResponseStatus.IS_NOT_PIN_CODE_FLOW);
			return response;
		}

		logger.info(subscription.getCampaignOffer().getCarrier().getNetworkCode() + "|"
				+ subscription.getCustomer().getMsisdn() + "|" + subscription.getId()
				+ "| new subscription request answer -> " + request.toString());

		SubscriptionStatus subStatus = subscription.getListOfSubscriptionsStatus().get(0);

		if (subStatus.getStatus().equals(UserSubscriptionStatus.PREACTIVE)) {

			if (StringUtils.equalsIgnoreCase(request.getOperationStatus(), "Success")
					&& (StringUtils.equalsIgnoreCase(request.getResponseCode(), "Success"))) {

				if (request.getSubscriptionContractId() == null) {
					SubscriptionStatus newStatus = new SubscriptionStatus();
					newStatus.setStatus(UserSubscriptionStatus.FAILED);
					newStatus.setStatusDate(new Date());
					newStatus.setSubscription(subscription);
					newStatus.setStatusReason("Subscription contract id  is null");
					subscription.getListOfSubscriptionsStatus().add(newStatus);
					subscriptionsRepo.save(subscription);

					logger.error(subscription.getCampaignOffer().getCarrier().getNetworkCode() + "|"
							+ subscription.getCustomer().getMsisdn() + "|"
							+ "subscription failed: external id can not be null");
					response.setStatus(ResponseStatus.SUBSCRIPTION_CONTRACT_ID_IS_NULL);
					return response;
				}

				SubscriptionStatus newStatus = new SubscriptionStatus();

				newStatus.setStatusDate(new Date());
				newStatus.setSubscription(subscription);
				newStatus.setStatusReason("Tpay pin code verification success");
				newStatus.setStatus(UserSubscriptionStatus.ACTIVE);

				subscription.setStartDate(new Date());
				subscription.setAccessToken(generateAccessKey());
				subscription.getListOfSubscriptionsStatus().add(newStatus);

				response.setSubscriptionId(subscription.getId());
				response.setSubscriptionStatus(newStatus.getStatus());
				subscriptionsRepo.save(subscription);

				response.setSubscriptionContractId(subscription.getExternalid());
				response.setAccessToken(subscription.getAccessToken());
				response.setStatus(ResponseStatus.OK);
				return response;
			} else {
				SubscriptionStatus newStatus = new SubscriptionStatus();
				newStatus.setStatus(UserSubscriptionStatus.FAILED);
				newStatus.setStatusDate(new Date());
				newStatus.setSubscription(subscription);
				newStatus.setStatusReason(request.getOperationStatus() + ": " + request.getErrorMessage());
				subscription.getListOfSubscriptionsStatus().add(newStatus);
				subscriptionsRepo.save(subscription);

				logger.error("pin validation request failed: response status is not Success ");
				response.setStatus(ResponseStatus.PIN_VERIFICATION_FAIL_ON_PARTNER);
				return response;
			}
		} else {
			logger.error("new subscription request failed: subscription status is not PREACTIVE ");
			response.setStatus(ResponseStatus.SUBSCRIPTION_IS_NOT_PREACTIVE);
			return response;
		}
	}

	private String generateAccessKey() {
		SecureRandom random = new SecureRandom();
		byte bytes[] = new byte[9];
		random.nextBytes(bytes);
		String token = bytes.toString();
		return token;
	}

}
