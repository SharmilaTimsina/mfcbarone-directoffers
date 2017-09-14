package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.Country;

/**
 * Repository : Countries.
 */
public interface CountriesRepository extends PagingAndSortingRepository<Country, Integer> {

}
