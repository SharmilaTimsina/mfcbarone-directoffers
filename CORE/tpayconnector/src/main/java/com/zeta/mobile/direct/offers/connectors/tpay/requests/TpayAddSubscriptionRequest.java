package com.zeta.mobile.direct.offers.connectors.tpay.requests;

import java.util.Date;

public class TpayAddSubscriptionRequest {

	private String msisdn;
	private Long operatorCode;
	private String headerEnrichmentReferenceCode;
	private boolean sendVerificationSMS;
	private Long impressionId;

	/* TODO this parameters should be filled by backend */
	private String language;

	private Boolean executeInitialPaymentNow;
	private Boolean executeRecurringPaymentNow;

	private String subscriptionPlanId;
	private String initialPaymentproductId;
	private String recurringPaymentproductId;
	private String productCatalogName;

	private Date contractStartDate;
	private Date contractEndDate;
	private boolean autoRenewContract;
	private Long customerAccountNumber;
	private Date initialPaymentDate;

	private boolean allowMultipleFreeStartPeriods;
	private String smsId;

	public Long getCustomerAccountNumber() {
		return customerAccountNumber;
	}

	public void setCustomerAccountNumber(Long customerAccountNumber) {
		this.customerAccountNumber = customerAccountNumber;
	}

	public String getMsisdn() {
		return msisdn;
	}

	public void setMsisdn(String msisdn) {
		this.msisdn = msisdn;
	}

	public Long getOperatorCode() {
		return operatorCode;
	}

	public void setOperatorCode(Long operatorCode) {
		this.operatorCode = operatorCode;
	}

	public String getSubscriptionPlanId() {
		return subscriptionPlanId;
	}

	public void setSubscriptionPlanId(String subscriptionPlanId) {
		this.subscriptionPlanId = subscriptionPlanId;
	}

	public String getInitialPaymentproductId() {
		return initialPaymentproductId;
	}

	public void setInitialPaymentproductId(String initialPaymentproductId) {
		this.initialPaymentproductId = initialPaymentproductId;
	}

	public Date getInitialPaymentDate() {
		return initialPaymentDate;
	}

	public void setInitialPaymentDate(Date initialPaymentDate) {
		this.initialPaymentDate = initialPaymentDate;
	}

	public Boolean getExecuteInitialPaymentNow() {
		return executeInitialPaymentNow;
	}

	public void setExecuteInitialPaymentNow(Boolean executeInitialPaymentNow) {
		this.executeInitialPaymentNow = executeInitialPaymentNow;
	}

	public String getRecurringPaymentproductId() {
		return recurringPaymentproductId;
	}

	public void setRecurringPaymentproductId(String recurringPaymentproductId) {
		this.recurringPaymentproductId = recurringPaymentproductId;
	}

	public String getProductCatalogName() {
		return productCatalogName;
	}

	public void setProductCatalogName(String productCatalogName) {
		this.productCatalogName = productCatalogName;
	}

	public Boolean getExecuteRecurringPaymentNow() {
		return executeRecurringPaymentNow;
	}

	public void setExecuteRecurringPaymentNow(Boolean executeRecurringPaymentNow) {
		this.executeRecurringPaymentNow = executeRecurringPaymentNow;
	}

	public Date getContractStartDate() {
		return contractStartDate;
	}

	public void setContractStartDate(Date contractStartDate) {
		this.contractStartDate = contractStartDate;
	}

	public Date getContractEndDate() {
		return contractEndDate;
	}

	public void setContractEndDate(Date contractEndDate) {
		this.contractEndDate = contractEndDate;
	}

	public boolean isAutoRenewContract() {
		return autoRenewContract;
	}

	public void setAutoRenewContract(boolean autoRenewContract) {
		this.autoRenewContract = autoRenewContract;
	}

	public String getLanguage() {
		return language;
	}

	public void setLanguage(String language) {
		this.language = language;
	}

	public boolean isSendVerificationSMS() {
		return sendVerificationSMS;
	}

	public void setSendVerificationSMS(boolean sendVerificationSMS) {
		this.sendVerificationSMS = sendVerificationSMS;
	}

	public boolean isAllowMultipleFreeStartPeriods() {
		return allowMultipleFreeStartPeriods;
	}

	public void setAllowMultipleFreeStartPeriods(boolean allowMultipleFreeStartPeriods) {
		this.allowMultipleFreeStartPeriods = allowMultipleFreeStartPeriods;
	}

	public String getHeaderEnrichmentReferenceCode() {
		return headerEnrichmentReferenceCode;
	}

	public void setHeaderEnrichmentReferenceCode(String headerEnrichmentReferenceCode) {
		this.headerEnrichmentReferenceCode = headerEnrichmentReferenceCode;
	}

	public String getSmsId() {
		return smsId;
	}

	public void setSmsId(String smsId) {
		this.smsId = smsId;
	}

	public Long getImpressionId() {
		return impressionId;
	}

	public void setImpressionId(Long impressionId) {
		this.impressionId = impressionId;
	}

}
