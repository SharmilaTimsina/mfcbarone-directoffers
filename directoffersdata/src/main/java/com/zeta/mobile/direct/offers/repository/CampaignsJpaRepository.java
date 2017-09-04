package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CampaignsEntity;

/**
 * Repository : Campaigns.
 */
public interface CampaignsJpaRepository extends PagingAndSortingRepository<CampaignsEntity, Integer> {

}
