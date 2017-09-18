package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.CampaignOffer;
import com.zeta.mobile.direct.offers.entities.Customer;
import com.zeta.mobile.direct.offers.entities.Subscription;

/**
 * Repository : Subscriptions.
 */
public interface SubscriptionsRepository extends PagingAndSortingRepository<Subscription, Long> {

	public Subscription findById(@Param("id") Long id);

	public Subscription findByCustomerAndCampaignOffer(@Param("customer") Customer customer,
			@Param("campaignOffer") CampaignOffer campaignOffer);
}
