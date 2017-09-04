package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;

import com.zeta.mobile.direct.offers.entities.CountriesEntity;

/**
 * Repository : Countries.
 */
public interface CountriesJpaRepository extends PagingAndSortingRepository<CountriesEntity, Integer> {

}
