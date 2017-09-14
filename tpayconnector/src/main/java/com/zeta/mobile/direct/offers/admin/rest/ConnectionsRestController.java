package com.zeta.mobile.direct.offers.admin.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.Connection;
import com.zeta.mobile.direct.offers.repository.ConnectionsRepository;

@RestController
@RequestMapping("connections")
public class ConnectionsRestController {

	@Autowired
	private ConnectionsRepository connectionsRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<Connection> getEmployeeInJSON() {
		Iterable<Connection> connectionIterable = connectionsRepo.findAll();
		ArrayList<Connection> list = Lists.newArrayList(connectionIterable);
		return list;
	}
}