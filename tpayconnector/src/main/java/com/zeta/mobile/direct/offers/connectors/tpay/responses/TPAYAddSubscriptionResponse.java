package com.zeta.mobile.direct.offers.connectors.tpay.responses;

import com.zeta.mobile.direct.offers.admin.generic.Response;
import com.zeta.mobile.direct.offers.connectors.tpay.requests.TpayAddSubscriptionRequest;

public class TPAYAddSubscriptionResponse extends Response {

	private boolean isNewCustomer;
	private TpayAddSubscriptionRequest request;

	public boolean isNewCustomer() {
		return isNewCustomer;
	}

	public void setNewCustomer(boolean isNewCustomer) {
		this.isNewCustomer = isNewCustomer;
	}

	public TpayAddSubscriptionRequest getRequest() {
		if (request == null) {
			request = new TpayAddSubscriptionRequest();
		}
		return request;
	}

}
