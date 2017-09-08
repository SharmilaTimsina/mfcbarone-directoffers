package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.CarriersEntity;
import com.zeta.mobile.direct.offers.repository.CarriersJpaRepository;

@RestController
@RequestMapping("carriers")
public class CarriersRestController {

	@Autowired
	private CarriersJpaRepository carriersRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<CarriersEntity> getEmployeeInJSON() {
		Iterable<CarriersEntity> carriersIterable = carriersRepo.findAll();
		ArrayList<CarriersEntity> list = Lists.newArrayList(carriersIterable);
		return list;
	}
}