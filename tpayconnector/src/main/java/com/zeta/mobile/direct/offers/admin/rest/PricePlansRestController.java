package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.PricepointplanEntity;
import com.zeta.mobile.direct.offers.repository.PricepointplanJpaRepository;

@RestController
@RequestMapping("priceplans")
public class PricePlansRestController {
	@Autowired
	private PricepointplanJpaRepository pricepointplanRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<PricepointplanEntity> getEmployeeInJSON() {
		Iterable<PricepointplanEntity> carriersIterable = pricepointplanRepo.findAll();
		ArrayList<PricepointplanEntity> list = Lists.newArrayList(carriersIterable);
		return list;
	}
}
