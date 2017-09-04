package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CarriersEntity;
import com.zeta.mobile.direct.offers.entities.CarriersEntityKey;

/**
 * Repository : Carriers.
 */
public interface CarriersJpaRepository extends PagingAndSortingRepository<CarriersEntity, CarriersEntityKey> {

}
