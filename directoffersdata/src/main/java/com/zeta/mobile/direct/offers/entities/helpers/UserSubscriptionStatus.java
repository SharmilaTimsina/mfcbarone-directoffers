package com.zeta.mobile.direct.offers.entities.helpers;

import com.fasterxml.jackson.annotation.JsonFormat;

@JsonFormat(shape = JsonFormat.Shape.STRING)
public enum UserSubscriptionStatus {
	REQUESTED, PREACTIVE, ACTIVEOS, ACTIVE, SUSPENDED, RESUMED, PARKED, INACTIVE;
}
