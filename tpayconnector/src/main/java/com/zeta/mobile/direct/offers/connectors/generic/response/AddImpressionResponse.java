package com.zeta.mobile.direct.offers.connectors.generic.response;

import com.zeta.mobile.direct.offers.admin.generic.Response;

public class AddImpressionResponse extends Response {

	private Long impressionId;

	public Long getImpressionId() {
		return impressionId;
	}

	public void setImpressionId(Long impressionId) {
		this.impressionId = impressionId;
	}

	@Override
	public String toString() {
		return "AddImpressionResponse [impressionId=" + impressionId + ", status=" + status.toString() + "]";
	}

}
