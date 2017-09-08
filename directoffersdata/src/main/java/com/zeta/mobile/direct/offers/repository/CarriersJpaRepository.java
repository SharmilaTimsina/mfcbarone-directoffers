package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CarriersEntity;

/**
 * Repository : Carriers.
 */
public interface CarriersJpaRepository extends PagingAndSortingRepository<CarriersEntity, Integer> {

}
