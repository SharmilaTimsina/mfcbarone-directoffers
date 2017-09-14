package com.zeta.mobile.direct.offers.admin.generic;

import com.fasterxml.jackson.annotation.JsonFormat;

@JsonFormat(shape = JsonFormat.Shape.OBJECT)
public enum ResponseStatus {
	OK(0, "SUCCESS"), 
	CARRIER_NOT_FOUND(-1, "CARRIER NOT FOUND"), 
	CAMPAIGN_NOT_FOUND(-2,"CAMPAIGN NOT FOUND"), 
	CAMPAIGN_NAME_IS_NULL(-3, "CAMPAIGN NAME CAN NOT BE NULL"), 
	MSISDN_IS_NULL(-4, "MSISDN CAN NOT BE NULL"), 
	CARRIER_IS_NULL(-5, "CARRIER ID (OPERATOR ID) CAN NOT BE NULL"), 
	IMPRESSION_IS_NULL(-6, "IMPRESSION ID CAN NOT BE NULL"), 
	IMPRESSION_NOT_FOUND(-7, "IMPRESSION NOT FOUND"),
	UNDEFINED_SALES_CHANNEL(-7, "UNDEFINE SALES CHANNEL: HeaderEnrichmentReferenceCode is null and sendVerificationSMS is setted to false");

	private final long code;
	private final String description;

	ResponseStatus(long code, String description) {
		this.code = code;
		this.description = description;
	}

	public long getCode() {
		return this.code;
	}

	public String getDescription() {
		return this.description;
	}
}
