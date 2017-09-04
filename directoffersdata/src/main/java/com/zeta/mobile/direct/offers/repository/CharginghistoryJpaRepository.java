package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CharginghistoryEntity;

/**
 * Repository : Charginghistory.
 */
public interface CharginghistoryJpaRepository extends PagingAndSortingRepository<CharginghistoryEntity, Integer> {

}
