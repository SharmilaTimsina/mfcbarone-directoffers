package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.Campaign;
import com.zeta.mobile.direct.offers.entities.CampaignOffer;
import com.zeta.mobile.direct.offers.entities.Carrier;

/**
 * Repository : Campaignoffers.
 */
public interface CampaignOffersRepository extends PagingAndSortingRepository<CampaignOffer, Integer> {

	public CampaignOffer findByOperatorAndCampaign(@Param("carrier") Carrier carrier,
			@Param("campaign") Campaign campaign);
}
