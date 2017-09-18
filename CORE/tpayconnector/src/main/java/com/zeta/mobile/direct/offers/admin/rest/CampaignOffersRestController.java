package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.CampaignOffer;
import com.zeta.mobile.direct.offers.repository.CampaignOffersRepository;

@RestController
@RequestMapping("campaignoffers")
public class CampaignOffersRestController {
	@Autowired
	private CampaignOffersRepository campaignOffersRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<CampaignOffer> getEmployeeInJSON() {
		Iterable<CampaignOffer> campaignsIterable = campaignOffersRepo.findAll();
		ArrayList<CampaignOffer> list = Lists.newArrayList(campaignsIterable);
		return list;
	}
}
