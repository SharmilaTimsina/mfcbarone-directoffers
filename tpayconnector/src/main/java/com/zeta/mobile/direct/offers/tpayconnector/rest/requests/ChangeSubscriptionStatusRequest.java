package com.zeta.mobile.direct.offers.tpayconnector.rest.requests;

import java.util.Date;

public class ChangeSubscriptionStatusRequest {
	private Date created_at;
	private String status;
	private String action;
	private String subscription_contract_id;
	private String customer_account_number;
	private String reason;

	public Date getCreated_at() {
		return created_at;
	}

	public void setCreated_at(Date created_at) {
		this.created_at = created_at;
	}

	public String getStatus() {
		return status;
	}

	public void setStatus(String status) {
		this.status = status;
	}

	public String getAction() {
		return action;
	}

	public void setAction(String action) {
		this.action = action;
	}

	public String getSubscription_contract_id() {
		return subscription_contract_id;
	}

	public void setSubscription_contract_id(String subscription_contract_id) {
		this.subscription_contract_id = subscription_contract_id;
	}

	public String getCustomer_account_number() {
		return customer_account_number;
	}

	public void setCustomer_account_number(String customer_account_number) {
		this.customer_account_number = customer_account_number;
	}

	public String getReason() {
		return reason;
	}

	public void setReason(String reason) {
		this.reason = reason;
	}

	@Override
	public String toString() {
		return "ChangeSubscriptionRequest [created_at=" + created_at + ", status=" + status + ", action=" + action
				+ ", subscription_contract_id=" + subscription_contract_id + ", customer_account_number="
				+ customer_account_number + ", reason=" + reason + "]";
	}

	
}
