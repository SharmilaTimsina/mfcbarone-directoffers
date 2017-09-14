package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Subscription;

/**
 * Repository : Subscriptions.
 */
public interface SubscriptionsRepository extends PagingAndSortingRepository<Subscription, Integer> {

}
