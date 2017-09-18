package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.Carrier;

/**
 * Repository : Carriers.
 */
public interface CarriersRepository extends PagingAndSortingRepository<Carrier, Integer> {

	public Carrier findByNetworkCode(@Param("networkCode") Long networkCode);

}
