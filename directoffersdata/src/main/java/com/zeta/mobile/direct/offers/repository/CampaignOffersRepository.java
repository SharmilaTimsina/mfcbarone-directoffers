package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CampaignOffer;

/**
 * Repository : Campaignoffers.
 */
public interface CampaignOffersRepository extends PagingAndSortingRepository<CampaignOffer, Integer> {

	public CampaignOffer findByOperatorIdAndCampaignId(Long opId, Long CampaignId);
}
