package com.zeta.mobile.direct.offers.admin.services.subscription;

import java.util.Date;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.entities.Customer;
import com.zeta.mobile.direct.offers.repository.CustomersRepository;

@Component
public class CustomersService {
	final static Logger logger = Logger.getLogger(SubscriptionService.class);

	@Autowired
	private CustomersRepository customersRepo;

	public Customer findOrCreate(String msisdn, Carrier carrier, String createdBy, String language) {

		Customer customer = customersRepo.findByMsisdnAndCarrier(msisdn, carrier);

		if (customer == null) {
			logger.info(carrier.getNetworkCode() + "|" + msisdn + " : customer not found -> creating new");
			customer = new Customer();
			customer.setCarrier(carrier);
			customer.setCreatedby(createdBy);
			customer.setCreationdate(new Date());
			customer.setMsisdn(msisdn);
			customer.setName(null);
			customer.setSurname(null);
			customer.setStatus("ACTIVE");
			customer.setLanguage(language);
			customer = customersRepo.save(customer);
		}

		return customer;
	}
}
