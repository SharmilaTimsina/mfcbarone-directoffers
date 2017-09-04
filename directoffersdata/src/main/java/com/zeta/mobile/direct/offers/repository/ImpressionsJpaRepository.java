package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.ImpressionsEntity;

/**
 * Repository : Impressions.
 */
public interface ImpressionsJpaRepository extends PagingAndSortingRepository<ImpressionsEntity, Integer> {

}
