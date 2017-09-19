<?php

/**
 * Description of SendSubscriptionCancellationPinSMS
 *
 * @author David Mendes
 */
class SendSubscriptionCancellationPinSMS extends BaseRequestFunction{
    public $ws_service_url = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';
    public $signature; //string - Mandatory
    public $subscriptionContractId; //long - Mandatory
}