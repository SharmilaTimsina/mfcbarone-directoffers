package com.zeta.mobile.direct.offers.connectors.generic;

import java.util.Date;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.zeta.mobile.direct.offers.admin.generic.ResponseStatus;
import com.zeta.mobile.direct.offers.connectors.generic.requests.AddImpressionRequest;
import com.zeta.mobile.direct.offers.connectors.generic.response.AddImpressionResponse;
import com.zeta.mobile.direct.offers.connectors.tpay.TpayIntegratorRestController;
import com.zeta.mobile.direct.offers.entities.Campaign;
import com.zeta.mobile.direct.offers.entities.Impression;
import com.zeta.mobile.direct.offers.repository.CampaignsRepository;
import com.zeta.mobile.direct.offers.repository.ImpressionsRepository;

@RestController
@RequestMapping("impressions")
public class ImpressionsIntegratorRestController {

	@Autowired
	private ImpressionsRepository impressionsRepository;

	@Autowired
	private CampaignsRepository campaignsRepository;

	private final String CONNECTOR = "impressions.generic.integrator";

	final static Logger logger = Logger.getLogger(TpayIntegratorRestController.class);

	@RequestMapping(value = "/add", method = RequestMethod.PUT, consumes = "application/json", produces = "application/json")
	public @ResponseBody AddImpressionResponse addImpressison(@RequestBody AddImpressionRequest impressionRequest) {

		logger.info(CONNECTOR + " | " + impressionRequest.getSourceip() + " | " + impressionRequest.getCampaignName()
				+ " : new impression request -> " + impressionRequest.toString());

		AddImpressionResponse response = new AddImpressionResponse();

		// TODO Add more validations aka language
		if (impressionRequest.getCampaignName() == null) {
			logger.error(CONNECTOR + " | " + impressionRequest.getSourceip() + " | "
					+ impressionRequest.getCampaignName() + " : campaign name is null");
			response.setStatus(ResponseStatus.CAMPAIGN_NAME_IS_NULL);
			return response;
		}

		Campaign campaign = campaignsRepository.findByName(impressionRequest.getCampaignName());

		if (campaign == null) {
			logger.error(CONNECTOR + " | " + impressionRequest.getSourceip() + " | "
					+ impressionRequest.getCampaignName() + " : campaign name not found");
			response.setStatus(ResponseStatus.CAMPAIGN_NOT_FOUND);
			return response;
		}

		Impression impression = new Impression();
		impression.setBroswer(impressionRequest.getBroswer());
		impression.setCreatedby(CONNECTOR);
		impression.setCreationdate(new Date());
		impression.setDevice(impressionRequest.getDevice());
		impression.setImpressionUrl(impressionRequest.getOfferUrl());
		impression.setPlatform(impressionRequest.getPlatform());
		impression.setScreensize(impressionRequest.getScreensize());
		impression.setSourceip(impressionRequest.getSourceip());
		impression.setTimezone(impressionRequest.getTimezone());

		impression.setCampaign(campaign);

		impression = impressionsRepository.save(impression);

		response.setImpressionId(impression.getId());

		response.setStatus(ResponseStatus.OK);

		logger.info(CONNECTOR + " | " + impressionRequest.getSourceip() + " | " + impressionRequest.getCampaignName()
				+ " : new impression response -> " + response.toString());

		return response;
	}

}
