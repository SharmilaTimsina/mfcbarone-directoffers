package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.ConnectionsEntity;

/**
 * Repository : Connections.
 */
public interface ConnectionsJpaRepository extends PagingAndSortingRepository<ConnectionsEntity, Integer> {

}
