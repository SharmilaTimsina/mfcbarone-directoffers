package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.repository.CarriersRepository;

@RestController
@RequestMapping("carriers")
public class CarriersRestController {

	@Autowired
	private CarriersRepository carriersRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<Carrier> getEmployeeInJSON() {
		Iterable<Carrier> carriersIterable = carriersRepo.findAll();
		ArrayList<Carrier> list = Lists.newArrayList(carriersIterable);
		return list;
	}
}