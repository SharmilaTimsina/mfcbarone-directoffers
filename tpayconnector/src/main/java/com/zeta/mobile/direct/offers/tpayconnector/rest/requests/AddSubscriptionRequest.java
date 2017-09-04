package com.zeta.mobile.direct.offers.tpayconnector.rest.requests;

import java.util.Date;

public class AddSubscriptionRequest {

	private Date created_at;
	private String signature;
	private String customer_account_number;
	private String msisdn;
	private int operator_code;
	private int subscription_plan_id;
	private String initial_payment_product_id;
	private Date initial_payment_date; /* change to Date */
	private Boolean execute_initial_payment_now; /* change to Boolean */
	private String recurring_payment_product_id;
	private String product_catalog_name;
	private Boolean execute_recurring_payment_now; /* change to Boolean */
	private Date contract_start_date; /* change to Date */
	private Date contract_end_date; /* change to Date */
	private Boolean auto_renew_contract; /* change to Date */
	private String language;
	private Boolean send_verification_sms; /* change to Boolean */
	private Boolean allow_multiple_free_start_periods; /* change to Boolean */
	private String header_enrichment_reference_code;
	private String smsid;
	private String operation_status_code;
	private String payment_transaction_status_code;
	private String transaction_id;
	private String error_message;
	private Date next_payment_date; /* change to Boolean */
	private String subscription_contract_status;

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

	public String getCustomer_account_number() {
		return customer_account_number;
	}

	public void setCustomer_account_number(String customer_account_number) {
		this.customer_account_number = customer_account_number;
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

	public int getSubscription_plan_id() {
		return subscription_plan_id;
	}

	public void setSubscription_plan_id(int subscription_plan_id) {
		this.subscription_plan_id = subscription_plan_id;
	}

	public String getInitial_payment_product_id() {
		return initial_payment_product_id;
	}

	public void setInitial_payment_product_id(String initial_payment_product_id) {
		this.initial_payment_product_id = initial_payment_product_id;
	}

	public Date getInitial_payment_date() {
		return initial_payment_date;
	}

	public void setInitial_payment_date(Date initial_payment_date) {
		this.initial_payment_date = initial_payment_date;
	}

	public Boolean getExecute_initial_payment_now() {
		return execute_initial_payment_now;
	}

	public void setExecute_initial_payment_now(Boolean execute_initial_payment_now) {
		this.execute_initial_payment_now = execute_initial_payment_now;
	}

	public String getRecurring_payment_product_id() {
		return recurring_payment_product_id;
	}

	public void setRecurring_payment_product_id(String recurring_payment_product_id) {
		this.recurring_payment_product_id = recurring_payment_product_id;
	}

	public String getProduct_catalog_name() {
		return product_catalog_name;
	}

	public void setProduct_catalog_name(String product_catalog_name) {
		this.product_catalog_name = product_catalog_name;
	}

	public Boolean getExecute_recurring_payment_now() {
		return execute_recurring_payment_now;
	}

	public void setExecute_recurring_payment_now(Boolean execute_recurring_payment_now) {
		this.execute_recurring_payment_now = execute_recurring_payment_now;
	}

	public Date getContract_start_date() {
		return contract_start_date;
	}

	public void setContract_start_date(Date contract_start_date) {
		this.contract_start_date = contract_start_date;
	}

	public Date getContract_end_date() {
		return contract_end_date;
	}

	public void setContract_end_date(Date contract_end_date) {
		this.contract_end_date = contract_end_date;
	}

	public Boolean getAuto_renew_contract() {
		return auto_renew_contract;
	}

	public void setAuto_renew_contract(Boolean auto_renew_contract) {
		this.auto_renew_contract = auto_renew_contract;
	}

	public String getLanguage() {
		return language;
	}

	public void setLanguage(String language) {
		this.language = language;
	}

	public Boolean getSend_verification_sms() {
		return send_verification_sms;
	}

	public void setSend_verification_sms(Boolean send_verification_sms) {
		this.send_verification_sms = send_verification_sms;
	}

	public Boolean getAllow_multiple_free_start_periods() {
		return allow_multiple_free_start_periods;
	}

	public void setAllow_multiple_free_start_periods(Boolean allow_multiple_free_start_periods) {
		this.allow_multiple_free_start_periods = allow_multiple_free_start_periods;
	}

	public String getHeader_enrichment_reference_code() {
		return header_enrichment_reference_code;
	}

	public void setHeader_enrichment_reference_code(String header_enrichment_reference_code) {
		this.header_enrichment_reference_code = header_enrichment_reference_code;
	}

	public String getSmsid() {
		return smsid;
	}

	public void setSmsid(String smsid) {
		this.smsid = smsid;
	}

	public String getOperation_status_code() {
		return operation_status_code;
	}

	public void setOperation_status_code(String operation_status_code) {
		this.operation_status_code = operation_status_code;
	}

	public String getPayment_transaction_status_code() {
		return payment_transaction_status_code;
	}

	public void setPayment_transaction_status_code(String payment_transaction_status_code) {
		this.payment_transaction_status_code = payment_transaction_status_code;
	}

	public String getTransaction_id() {
		return transaction_id;
	}

	public void setTransaction_id(String transaction_id) {
		this.transaction_id = transaction_id;
	}

	public String getError_message() {
		return error_message;
	}

	public void setError_message(String error_message) {
		this.error_message = error_message;
	}

	public Date getNext_payment_date() {
		return next_payment_date;
	}

	public void setNext_payment_date(Date next_payment_date) {
		this.next_payment_date = next_payment_date;
	}

	public String getSubscription_contract_status() {
		return subscription_contract_status;
	}

	public void setSubscription_contract_status(String subscription_contract_status) {
		this.subscription_contract_status = subscription_contract_status;
	}

	@Override
	public String toString() {
		return "AddSubscriptionRequest [created_at=" + created_at + ", signature=" + signature
				+ ", customer_account_number=" + customer_account_number + ", msisdn=" + msisdn + ", operator_code="
				+ operator_code + ", subscription_plan_id=" + subscription_plan_id + ", initial_payment_product_id="
				+ initial_payment_product_id + ", initial_payment_date=" + initial_payment_date
				+ ", execute_initial_payment_now=" + execute_initial_payment_now + ", recurring_payment_product_id="
				+ recurring_payment_product_id + ", product_catalog_name=" + product_catalog_name
				+ ", execute_recurring_payment_now=" + execute_recurring_payment_now + ", contract_start_date="
				+ contract_start_date + ", contract_end_date=" + contract_end_date + ", auto_renew_contract="
				+ auto_renew_contract + ", language=" + language + ", send_verification_sms=" + send_verification_sms
				+ ", allow_multiple_free_start_periods=" + allow_multiple_free_start_periods
				+ ", header_enrichment_reference_code=" + header_enrichment_reference_code + ", smsid=" + smsid
				+ ", operation_status_code=" + operation_status_code + ", payment_transaction_status_code="
				+ payment_transaction_status_code + ", transaction_id=" + transaction_id + ", error_message="
				+ error_message + ", next_payment_date=" + next_payment_date + ", subscription_contract_status="
				+ subscription_contract_status + "]";
	}

}
