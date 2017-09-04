package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CampaignoffersEntity;

/**
 * Repository : Campaignoffers.
 */
public interface CampaignoffersJpaRepository extends PagingAndSortingRepository<CampaignoffersEntity, Integer> {

}
