package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Customer;

/**
 * Repository : Campaigns.
 */
public interface CustomersRepository extends PagingAndSortingRepository<Customer, Integer> {

	public Long countAll();

	public Customer findByMsisdnAndCarrierId(String custMsisdn, Long custCarrierId);

}
