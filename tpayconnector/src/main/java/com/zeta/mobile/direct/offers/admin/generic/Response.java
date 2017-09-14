package com.zeta.mobile.direct.offers.admin.generic;

public class Response {

	public ResponseStatus status;

	public ResponseStatus getStatus() {
		return status;
	}

	public void setStatus(ResponseStatus status) {
		this.status = status;
	}

	@Override
	public String toString() {
		return "[code=" + status.getCode() + " description=" + status.getDescription() + "]";
	}

}