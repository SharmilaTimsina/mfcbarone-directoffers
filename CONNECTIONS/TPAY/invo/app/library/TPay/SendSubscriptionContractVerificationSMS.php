<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendSubscriptionCancellationPinSMS
 *
 * @author David Mendes
 */
class SendSubscriptionContractVerificationSMS extends BaseRequestFunction{
    public $ws_service_url = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';
    public $signature; //string - Mandatory
    public $subscriptionContractId; //long - Mandatory
}