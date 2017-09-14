package com.zeta.mobile.direct.offers.connectors.tpay.requests;

import java.util.Date;

public class SendMTRequest {

	private Date created_at;
	private String set_from;
	private String subscription_contract_id;
	private String signature;
	private String message_body;
	private String msisdn;
	private int operator_code;
	private String message_delivery_status;
	private String error_message;

	public Date getCreated_at() {
		return created_at;
	}

	public void setCreated_at(Date created_at) {
		this.created_at = created_at;
	}

	public String getSet_from() {
		return set_from;
	}

	public void setSet_from(String set_from) {
		this.set_from = set_from;
	}

	public String getSubscription_contract_id() {
		return subscription_contract_id;
	}

	public void setSubscription_contract_id(String subscription_contract_id) {
		this.subscription_contract_id = subscription_contract_id;
	}

	public String getSignature() {
		return signature;
	}

	public void setSignature(String signature) {
		this.signature = signature;
	}

	public String getMessage_body() {
		return message_body;
	}

	public void setMessage_body(String message_body) {
		this.message_body = message_body;
	}

	public String getMsisdn() {
		return msisdn;
	}

	public void setMsisdn(String msisdn) {
		this.msisdn = msisdn;
	}

	public int getOperator_code() {
		return operator_code;
	}

	public void setOperator_code(int operator_code) {
		this.operator_code = operator_code;
	}

	public String getMessage_delivery_status() {
		return message_delivery_status;
	}

	public void setMessage_delivery_status(String message_delivery_status) {
		this.message_delivery_status = message_delivery_status;
	}

	public String getError_message() {
		return error_message;
	}

	public void setError_message(String error_message) {
		this.error_message = error_message;
	}

	@Override
	public String toString() {
		return "SendMTRequest [created_at=" + created_at + ", set_from=" + set_from + ", subscription_contract_id="
				+ subscription_contract_id + ", signature=" + signature + ", message_body=" + message_body + ", msisdn="
				+ msisdn + ", operator_code=" + operator_code + ", message_delivery_status=" + message_delivery_status
				+ ", error_message=" + error_message + "]";
	}

}
