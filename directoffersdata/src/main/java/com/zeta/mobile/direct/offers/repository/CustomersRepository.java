package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.entities.Customer;

/**
 * Repository : Campaigns.
 */
public interface CustomersRepository extends PagingAndSortingRepository<Customer, Integer> {

	public Long countAll();

	public Customer findByMsisdnAndCarrier(@Param("custMsisdn") String custMsisdn,
			@Param("custCarrier") Carrier custCarrier);

}
