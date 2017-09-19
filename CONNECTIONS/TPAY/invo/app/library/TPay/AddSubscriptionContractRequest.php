<?php
class AddSubscriptionContractRequest extends BaseRequestFunction{
    public $ws_service_url = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';
    public $signature;                      //string Mandatory
    public $customerAccountNumber;          //string Mandatory
    public $msisdn;                         //string Mandatory
    public $operatorCode;                   //String Mandatory
    public $subscriptionPlanId;             //long Mandatory 
    public $initialPaymentproductId;        //string Mandatory 
    public $initialPaymentDate;             //string Mandatory 
    public $executeInitialPaymentNow;       //bool Mandatory
    public $recurringPaymentproductId;      //string Mandatory 
    public $productCatalogName;             //string Mandatory 
    public $executeRecurringPaymentNow;     //bool Mandatory 
    public $contractStartDate;              //string Mandatory “yyyy-MM-dd hh:mm:ssZ” 
    public $contractEndDate;                //string Mandatory “yyyy-MM-dd hh:mm:ssZ” 
    public $autoRenewContract;              //bool Mandatory 
    public $language;                       //digest = 0,1,2,3 soap = Auto,English,Arabic,French  MerchantLanguage Mandatory
    public $sendVerificationSMS;            //bool? Optional
    public $allowMultipleFreeStartPeriods;  //bool? Optional 
    public $headerEnrichmentReferenceCode;  //string Optional
    public $smsId;                          //string Optional
    
    public function getMessage(){
        switch ($this->language) {
            case 'Auto':    $lang_msg = 0;break;
            case 'English': $lang_msg = 1;break;
            case 'Arabic':  $lang_msg = 2;break;
            case 'French':  $lang_msg = 3;break;
            default:
              $lang_msg = $this->language;break;
        }

        $message = $this->customerAccountNumber;
        $message .=$this->msisdn;
        $message .=$this->operatorCode;
        $message .=$this->subscriptionPlanId;
        $message .=$this->initialPaymentproductId;
        $message .=$this->initialPaymentDate;
        $message .=($this->executeInitialPaymentNow === true) || ($this->executeInitialPaymentNow === 'true') ? 'true' : 'false';
        $message .=$this->recurringPaymentproductId;
        $message .=$this->productCatalogName;
        $message .=($this->executeRecurringPaymentNow === true) || ($this->executeRecurringPaymentNow === 'true')? 'true' : 'false';
        $message .=$this->contractStartDate;
        $message .=$this->contractEndDate;
        $message .=($this->autoRenewContract === true) || ($this->autoRenewContract === 'true') ? 'true' : 'false';
        $message .=$lang_msg;
        $message .=($this->sendVerificationSMS === true)  || ($this->sendVerificationSMS === 'true') ? 'true' : 'false';
        $message .=($this->allowMultipleFreeStartPeriods === true)  || ($this->allowMultipleFreeStartPeriods === 'true') ? 'true' : 'false';
        $message .=$this->headerEnrichmentReferenceCode;
        $message .=$this->smsId;

        return $message;
    }
        
    public function mapParams($params){
        if(empty($params) || !is_array($params)){throw new Exception('map parameters error', 6);}
        $params = array_change_key_case($params, CASE_LOWER);

        $type_boolean = ['executeInitialPaymentNow','executeRecurringPaymentNow','autoRenewContract','sendVerificationSMS','allowMultipleFreeStartPeriods'];
        $type_boolean = array_flip($type_boolean);
        $type_boolean = array_change_key_case($type_boolean, CASE_LOWER);
        foreach((array)$this as $key => $value){
            if(!empty($params[strtolower($key)])){
                $this->$key = $params[strtolower($key)];
                if(isset($type_boolean[strtolower($key)])){
                    ($this->$key == 'true') ? $this->$key = true : $this->$key = false;    
                }
            }
        }
        if(property_exists($this,'signature')){$this->calcSignature();}
    }
    
    
    
    
    
    
}