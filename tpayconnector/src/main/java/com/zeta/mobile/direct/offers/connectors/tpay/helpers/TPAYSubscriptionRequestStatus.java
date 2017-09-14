package com.zeta.mobile.direct.offers.connectors.tpay.helpers;

import java.util.HashMap;
import java.util.Map;

public enum TPAYSubscriptionRequestStatus {

	PaymentCompletedSuccessfully(0, "Payment completed successfully"),
	FailedToSendVerificationPin(1, "Failed to send verification pin"),
	TransactionCancelledByUser(2, "Payment completed successfully"),
	FailedToContactMobileNetworkOperator(3, "Failed to contact mobile network"),
	NotEnoughCredit (4, "Not enough credit"),
	LimitExceeded(5, "Limit exceeded"),
	OperationRejectedByMobileNetworkOperator(6, "Operation rejected by mobile network"),
	OperationRejectedByTpay(7, "Operation rejected by TPAY"),
	InactiveLine(8, "Inactive line"),
	UnspecifiedError(9, "Unspecified error"),
	VerificationCodeSent(10, "Verification code sent"),
	InvalidPIN(11, "Invalid PIN"),
	Created(12, "Created"),
	SubscriberDoesNotExist(13, "Subscriber does not exist"),
	CorporateNotEligible(14, "Corportate not eligible"),
	MobileNetworkOperatorChargingError(15, "Mobile network operator charging error"),
	ExpiredPinCode(16, "Expire pin code"),
	Reverted(17, "Reverted"),
	NotSupportedPricePoint(18, "Not supported price point"),
	TimeOut(19, "Time out"),
	TransactionUnderProcessing(50, "Transaction under processing"),
	Error(51, "ERROR"),
	Undefined(-1, "Undefined"),
	SucceededAndFailedToContactMerchant(100, "Succeeded and failed to contact merchant"),
	SucceededAndRetryAttemptReached(101, "Succeeded and retry attempt reached"),
	PendingTransaction(21, "Pending transction");

	private final int code;
	private final String description;

	TPAYSubscriptionRequestStatus(int code, String description) {
		this.code = code;
		this.description = description;
	}
	
	private static Map<Integer, TPAYSubscriptionRequestStatus> map = new HashMap<Integer, TPAYSubscriptionRequestStatus>();

	static {
		for (TPAYSubscriptionRequestStatus status : TPAYSubscriptionRequestStatus.values()) {
			map.put(status.code, status);
		}
	}

	public static TPAYSubscriptionRequestStatus valueOf(int code) {
		return map.get(code);
	}

	public int getCode() {
		return this.code;
	}

	public String getDescription() {
		return this.description;
	}
	
}
