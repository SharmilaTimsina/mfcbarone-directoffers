package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Impression;

/**
 * Repository : Impressions.
 */
public interface ImpressionsRepository extends PagingAndSortingRepository<Impression, Integer> {

	public Impression findById(Long id);
}
