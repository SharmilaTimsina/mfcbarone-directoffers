package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.Campaign;

/**
 * Repository : Campaigns.
 */
public interface CampaignsRepository extends PagingAndSortingRepository<Campaign, Integer> {
	public Campaign findByName(@Param("name") String name);
}
