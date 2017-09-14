package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Carrier;

/**
 * Repository : Carriers.
 */
public interface CarriersRepository extends PagingAndSortingRepository<Carrier, Integer> {

	public Carrier findByNetworkCode(Long networkCode);

}
