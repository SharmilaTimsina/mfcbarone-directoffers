package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Currency;

/**
 * Repository : Currencies.
 */
public interface CurrenciesRepository extends PagingAndSortingRepository<Currency, Integer> {

}
