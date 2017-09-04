package com.zeta.mobile.direct.offers.tpayconnector.rest.requests;

import java.util.Date;

public class VerifySubscriptionRequest {

	private Date created_at;
	private String signature;
	private String subscription_contract_id;
	private String pin_code;
	private String operation_status_code;
	private String error_message;
	private int operator_code;
	private String msisdn;

	public Date getCreated_at() {
		return created_at;
	}

	public void setCreated_at(Date created_at) {
		this.created_at = created_at;
	}

	public String getSignature() {
		return signature;
	}

	public void setSignature(String signature) {
		this.signature = signature;
	}

	public String getSubscription_contract_id() {
		return subscription_contract_id;
	}

	public void setSubscription_contract_id(String subscription_contract_id) {
		this.subscription_contract_id = subscription_contract_id;
	}

	public String getPin_code() {
		return pin_code;
	}

	public void setPin_code(String pin_code) {
		this.pin_code = pin_code;
	}

	public String getOperation_status_code() {
		return operation_status_code;
	}

	public void setOperation_status_code(String operation_status_code) {
		this.operation_status_code = operation_status_code;
	}

	public String getError_message() {
		return error_message;
	}

	public void setError_message(String error_message) {
		this.error_message = error_message;
	}

	public int getOperator_code() {
		return operator_code;
	}

	public void setOperator_code(int operator_code) {
		this.operator_code = operator_code;
	}

	public String getMsisdn() {
		return msisdn;
	}

	public void setMsisdn(String msisdn) {
		this.msisdn = msisdn;
	}

	@Override
	public String toString() {
		return "VerifySubscriptionRequest [created_at=" + created_at + ", signature=" + signature
				+ ", subscription_contract_id=" + subscription_contract_id + ", pin_code=" + pin_code
				+ ", operation_status_code=" + operation_status_code + ", error_message=" + error_message
				+ ", operator_code=" + operator_code + ", msisdn=" + msisdn + "]";
	}

}
