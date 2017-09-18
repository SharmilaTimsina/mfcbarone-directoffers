package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.Campaign;
import com.zeta.mobile.direct.offers.repository.CampaignsRepository;

@RestController
@RequestMapping("campaigns")
public class CampaignsRestController {

	@Autowired
	private CampaignsRepository campaignsRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<Campaign> getEmployeeInJSON() {
		Iterable<Campaign> campaignsIterable = campaignsRepo.findAll();
		ArrayList<Campaign> list = Lists.newArrayList(campaignsIterable);
		return list;
	}

}
