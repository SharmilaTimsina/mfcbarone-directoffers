package com.zeta.mobile.direct.offers.entities.helpers;

import com.fasterxml.jackson.annotation.JsonFormat;

@JsonFormat(shape = JsonFormat.Shape.STRING)
public enum SalesChannel {
	GSM, WIRELESS, SMS;
}
