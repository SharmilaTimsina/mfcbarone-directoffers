package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CurrenciesEntity;

/**
 * Repository : Currencies.
 */
public interface CurrenciesJpaRepository extends PagingAndSortingRepository<CurrenciesEntity, Integer> {

}
