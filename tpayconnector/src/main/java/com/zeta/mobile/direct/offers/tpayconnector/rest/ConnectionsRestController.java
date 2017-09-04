package com.zeta.mobile.direct.offers.tpayconnector.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.ConnectionsEntity;
import com.zeta.mobile.direct.offers.repository.ConnectionsJpaRepository;

@RestController
@RequestMapping("connections")
public class ConnectionsRestController {

	@Autowired
	private ConnectionsJpaRepository connectionsRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<ConnectionsEntity> getEmployeeInJSON() {
		Iterable<ConnectionsEntity> connectionIterable = connectionsRepo.findAll();
		ArrayList<ConnectionsEntity> list = Lists.newArrayList(connectionIterable);
		return list;
	}
}