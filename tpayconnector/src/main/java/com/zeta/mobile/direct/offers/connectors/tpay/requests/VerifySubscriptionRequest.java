package com.zeta.mobile.direct.offers.connectors.tpay.requests;

public class VerifySubscriptionRequest {

	private Long subscriptionId;
	private String subscriptionContractId;
	private String pinCode;
	private String operationStatus;
	private String errorMessage;
	private String responseCode;

	public Long getSubscriptionId() {
		return subscriptionId;
	}

	public void setSubscriptionId(Long subscriptionId) {
		this.subscriptionId = subscriptionId;
	}

	public String getSubscriptionContractId() {
		return subscriptionContractId;
	}

	public void setSubscriptionContractId(String subscriptionContractId) {
		this.subscriptionContractId = subscriptionContractId;
	}

	public String getPinCode() {
		return pinCode;
	}

	public void setPinCode(String pinCode) {
		this.pinCode = pinCode;
	}

	public String getOperationStatus() {
		return operationStatus;
	}

	public void setOperationStatus(String operationStatus) {
		this.operationStatus = operationStatus;
	}

	public String getErrorMessage() {
		return errorMessage;
	}

	public void setErrorMessage(String errorMessage) {
		this.errorMessage = errorMessage;
	}

	public String getResponseCode() {
		return responseCode;
	}

	public void setResponseCode(String responseCode) {
		this.responseCode = responseCode;
	}

	@Override
	public String toString() {
		return "VerifySubscriptionRequest [subscriptionId=" + subscriptionId + ", subscriptionContractId="
				+ subscriptionContractId + ", pinCode=" + pinCode + ", operationStatus=" + operationStatus
				+ ", errorMessage=" + errorMessage + ", responseCode=" + responseCode + "]";
	}
}
