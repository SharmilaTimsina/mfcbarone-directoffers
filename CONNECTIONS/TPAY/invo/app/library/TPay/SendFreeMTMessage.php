<?php
class SendFreeMTMessage extends BaseRequestFunction{
    public $ws_service_url = 'http://staging.tpay.me/api/TPay.svc?wsdl';
    public $signature;
    public $messageBody;
    public $msisdn;
    public $operatorCode;
}