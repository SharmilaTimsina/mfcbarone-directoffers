package com.zeta.mobile.direct.offers.connectors.tpay.responses;

import com.zeta.mobile.direct.offers.admin.generic.Response;
import com.zeta.mobile.direct.offers.entities.helpers.UserSubscriptionStatus;

public class VerifySubscriptionResponse extends Response {

	private UserSubscriptionStatus subscriptionStatus;
	private String accessToken;
	private String subscriptionContractId;
	private Long subscriptionId;

	public UserSubscriptionStatus getSubscriptionStatus() {
		return subscriptionStatus;
	}

	public void setSubscriptionStatus(UserSubscriptionStatus subscriptionStatus) {
		this.subscriptionStatus = subscriptionStatus;
	}

	public String getAccessToken() {
		return accessToken;
	}

	public void setAccessToken(String accessToken) {
		this.accessToken = accessToken;
	}

	public String getSubscriptionContractId() {
		return subscriptionContractId;
	}

	public void setSubscriptionContractId(String subscriptionContractId) {
		this.subscriptionContractId = subscriptionContractId;
	}

	public Long getSubscriptionId() {
		return subscriptionId;
	}

	public void setSubscriptionId(Long subscriptionId) {
		this.subscriptionId = subscriptionId;
	}

}
