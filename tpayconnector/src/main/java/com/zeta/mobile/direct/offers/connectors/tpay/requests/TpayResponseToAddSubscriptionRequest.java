package com.zeta.mobile.direct.offers.connectors.tpay.requests;

import java.util.Date;

public class TpayResponseToAddSubscriptionRequest {

	private Long subscriptionId;
	private String operationStatusCode;
	private String subscriptionContractId;
	private String paymentTransactionStatusCode;
	private String transactionId;
	private Date nextPaymentDate;
	private String errorMessage;
	private String subscriptionContractStatus;

	public String getOperationStatusCode() {
		return operationStatusCode;
	}

	public void setOperationStatusCode(String operationStatusCode) {
		this.operationStatusCode = operationStatusCode;
	}

	public String getSubscriptionContractId() {
		return subscriptionContractId;
	}

	public void setSubscriptionContractId(String subscriptionContractId) {
		this.subscriptionContractId = subscriptionContractId;
	}

	public String getPaymentTransactionStatusCode() {
		return paymentTransactionStatusCode;
	}

	public void setPaymentTransactionStatusCode(String paymentTransactionStatusCode) {
		this.paymentTransactionStatusCode = paymentTransactionStatusCode;
	}

	public String getTransactionId() {
		return transactionId;
	}

	public void setTransactionId(String transactionId) {
		this.transactionId = transactionId;
	}

	public Date getNextPaymentDate() {
		return nextPaymentDate;
	}

	public void setNextPaymentDate(Date nextPaymentDate) {
		this.nextPaymentDate = nextPaymentDate;
	}

	public String getErrorMessage() {
		return errorMessage;
	}

	public void setErrorMessage(String errorMessage) {
		this.errorMessage = errorMessage;
	}

	public String getSubscriptionContractStatus() {
		return subscriptionContractStatus;
	}

	public void setSubscriptionContractStatus(String subscriptionContractStatus) {
		this.subscriptionContractStatus = subscriptionContractStatus;
	}

	public Long getSubscriptionId() {
		return subscriptionId;
	}

	public void setSubscriptionId(Long subscriptionId) {
		this.subscriptionId = subscriptionId;
	}

	@Override
	public String toString() {
		return "TpayResponseToAddSubscriptionRequest [operationStatusCode=" + operationStatusCode
				+ ", subscriptionContractId=" + subscriptionContractId + ", paymentTransactionStatusCode="
				+ paymentTransactionStatusCode + ", transactionId=" + transactionId + ", nextPaymentDate="
				+ nextPaymentDate + ", errorMessage=" + errorMessage + ", subscriptionContractStatus="
				+ subscriptionContractStatus + "]";
	}
}
