package com.zeta.mobile.direct.offers.repository;

import org.springframework.data.repository.PagingAndSortingRepository;
import org.springframework.data.repository.query.Param;

import com.zeta.mobile.direct.offers.entities.Carrier;
import com.zeta.mobile.direct.offers.entities.MoMessages;

/**
 * Repository : Carriers.
 */
public interface MoMessagesRepository extends PagingAndSortingRepository<MoMessages, Integer> {


}
