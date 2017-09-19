<?php

/**
 * Description of SendSubscriptionCancellationPinSMS
 *
 * @author David Mendes
 */
class CancelSubscriptionContractRequest extends BaseRequestFunction{
    public $ws_service_url = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';
    public $signature; //string - Mandatory
    public $subscriptionContractId; //long - Mandatory

    public $cancellationProductCatalogName; //long - Mandatory
    public $cancellationProductId; //long - Mandatory
    public $cancellationDate; //long - Mandatory
    public $customerAccountNumber; //long - Mandatory
}