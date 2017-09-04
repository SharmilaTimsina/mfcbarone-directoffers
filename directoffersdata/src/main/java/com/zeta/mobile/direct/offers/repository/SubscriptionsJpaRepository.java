package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.SubscriptionsEntity;

/**
 * Repository : Subscriptions.
 */
public interface SubscriptionsJpaRepository extends PagingAndSortingRepository<SubscriptionsEntity, Integer> {

}
