package com.zeta.mobile.direct.offers.connectors.tpay.responses;

import com.zeta.mobile.direct.offers.admin.generic.Response;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.TpayAddSubscriptionRequest;

public class TPAYAddSubscriptionResponse extends Response {

	private TpayAddSubscriptionRequest request;

	public TpayAddSubscriptionRequest getRequest() {
		if (request == null) {
			request = new TpayAddSubscriptionRequest();
		}
		return request;
	}

	private Long subscriptionId;

	public Long getSubscriptionId() {
		return subscriptionId;
	}

	public void setSubscriptionId(Long subscriptionId) {
		this.subscriptionId = subscriptionId;
	}

	public void setRequest(TpayAddSubscriptionRequest request) {
		this.request = request;
	}

	@Override
	public String toString() {
		return "TPAYAddSubscriptionResponse [request=" + request + ", subscriptionId=" + subscriptionId + ", status="
				+ status + "]";
	}

}
