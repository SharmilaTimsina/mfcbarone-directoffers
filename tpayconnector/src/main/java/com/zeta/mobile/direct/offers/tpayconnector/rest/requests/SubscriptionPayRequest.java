package com.zeta.mobile.direct.offers.tpayconnector.rest.requests;

import java.util.Date;

public class SubscriptionPayRequest {

	private Date created_at;
	private String action;
	private String subscription_contract_id;
	private String customer_account_number;
	private String transaction_id;
	private Double amount_charged;
	private int currency_code;
	private Date payment_date;
	private String error_message;
	private String product_catalog_name;
	private String product_id;
	private String bill_number;
	private String bill_action;
	private String msisdn;
	private Double bill_amount;
	private Double collected_amount;

	public Date getCreated_at() {
		return created_at;
	}

	public void setCreated_at(Date created_at) {
		this.created_at = created_at;
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

	public String getTransaction_id() {
		return transaction_id;
	}

	public void setTransaction_id(String transaction_id) {
		this.transaction_id = transaction_id;
	}

	public Double getAmount_charged() {
		return amount_charged;
	}

	public void setAmount_charged(Double amount_charged) {
		this.amount_charged = amount_charged;
	}

	public int getCurrency_code() {
		return currency_code;
	}

	public void setCurrency_code(int currency_code) {
		this.currency_code = currency_code;
	}

	public Date getPayment_date() {
		return payment_date;
	}

	public void setPayment_date(Date payment_date) {
		this.payment_date = payment_date;
	}

	public String getError_message() {
		return error_message;
	}

	public void setError_message(String error_message) {
		this.error_message = error_message;
	}

	public String getProduct_catalog_name() {
		return product_catalog_name;
	}

	public void setProduct_catalog_name(String product_catalog_name) {
		this.product_catalog_name = product_catalog_name;
	}

	public String getProduct_id() {
		return product_id;
	}

	public void setProduct_id(String product_id) {
		this.product_id = product_id;
	}

	public String getBill_number() {
		return bill_number;
	}

	public void setBill_number(String bill_number) {
		this.bill_number = bill_number;
	}

	public String getBill_action() {
		return bill_action;
	}

	public void setBill_action(String bill_action) {
		this.bill_action = bill_action;
	}

	public String getMsisdn() {
		return msisdn;
	}

	public void setMsisdn(String msisdn) {
		this.msisdn = msisdn;
	}

	public Double getBill_amount() {
		return bill_amount;
	}

	public void setBill_amount(Double bill_amount) {
		this.bill_amount = bill_amount;
	}

	public Double getCollected_amount() {
		return collected_amount;
	}

	public void setCollected_amount(Double collected_amount) {
		this.collected_amount = collected_amount;
	}

	@Override
	public String toString() {
		return "SubscriptionPayRequest [created_at=" + created_at + ", action=" + action + ", subscription_contract_id="
				+ subscription_contract_id + ", customer_account_number=" + customer_account_number
				+ ", transaction_id=" + transaction_id + ", amount_charged=" + amount_charged + ", currency_code="
				+ currency_code + ", payment_date=" + payment_date + ", error_message=" + error_message
				+ ", product_catalog_name=" + product_catalog_name + ", product_id=" + product_id + ", bill_number="
				+ bill_number + ", bill_action=" + bill_action + ", msisdn=" + msisdn + ", bill_amount=" + bill_amount
				+ ", collected_amount=" + collected_amount + "]";
	}

}
