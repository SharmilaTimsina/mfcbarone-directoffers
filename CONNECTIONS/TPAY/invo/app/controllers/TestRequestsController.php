<?php

class TestRequestsController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Test Requests');
        parent::initialize();
    }
    public function indexAction(){}
    public function addsubscriptioncontractrequestAction(){
        echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequest:</span></b><div/>';

        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new AddSubscriptionContractRequest();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'AddSubscriptionContractRequest'); 

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);        
    }
    public function verifysubscriptioncontractAction(){
        echo '<b><span>verifysubscriptioncontractAction: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array('BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php','VerifySubscriptionContract' => APP_PATH.'app/library/TPay/VerifySubscriptionContract.php'));
        $loader->register();
        
       
        $verify_sub_contract = new VerifySubscriptionContract();
        
        $data = new VerifySubscriptionContract();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'VerifySubscriptionContract');
        
        $data->echoFields();
        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function confirmdirectpaymenttransactionAction(){     
        echo '<b><span>ConfirmDirectPaymentTransaction: Example developers.tpay.me</span></b>';

        $web_serv_add = 'http://staging.tpay.me/api/TPay.svc?wsdl';
        $data = new ConfirmDirectPaymentTransaction();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'ConfirmDirectPaymentTransaction');
        
        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function sendsubscriptioncontractverificationsmsAction(){
        echo '<b><span>SendSubscriptionContractVerificationSMS: Example developers.tpay.me</span></b>';

        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new SendSubscriptionContractVerificationSMS();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'SendSubscriptionContractVerificationSMS');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function suspendsubscriptioncontractrequestAction(){
        echo '<b><span>SuspendSubscriptionContractRequest: Example developers.tpay.me</span></b>';

        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new SuspendSubscriptionContractRequest();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'SuspendSubscriptionContractRequest');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();
        printResult($request,$result,$response,$message);
    }
    public function purgesubscriptioncontractrequestAction(){
        echo '<b><span>PurgeSubscriptionContractRequest: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new PurgeSubscriptionContractRequest();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'PurgeSubscriptionContractRequest');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function cancelsubscriptioncontractrequestAction(){
        echo '<b><span>CancelSubscriptionContractRequest: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new CancelSubscriptionContractRequest();
        $req = new sendSoapRequest($web_serv_add);
        //$result = $req->sendSoapRequest($data,'CancelSubscriptionContractRequest');
        $result = $req->sendSoapRequest($data->getArray(),'CancelSubscriptionContractRequest');
        

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function subscriptionchargingAction(){
        
        echo '<b><span>SubscriptionCharging: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new SubscriptionCharging();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'SubscriptionCharging');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function getsubscriptioncontractsAction(){
        echo '<b><span>GetSubscriptionContracts: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new GetSubscriptionContracts();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'GetSubscriptionContracts');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function skipbillAction(){
        echo '<b><span>SkipBill: Example developers.tpay.me</span></b>';
    }
    public function sendsubscriptioncancellationpinsmsAction(){
        echo '<b><span>SendSubscriptionCancellationPinSMS: Example developers.tpay.me</span></b>';
        
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new SendSubscriptionCancellationPinSMS();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'SendSubscriptionCancellationPinSMS');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
        
    }
    public function verifysubscriptioncancellationpinAction(){
        echo '<b><span>VerifySubscriptionCancellationPin: Example developers.tpay.me</span></b>';
        
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new VerifySubscriptionCancellationPin();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'VerifySubscriptionCancellationPin');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function headerenrichmentAction(){
        echo '<head>';
        $date=gmdate('Y-m-d H:i:s\Z'); 
        $lang='ar'; 
        $theme='light'; 
        
        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $digest= $public_key.':'.hash_hmac ('sha256', $date+$lang+$theme,$private_key); 
        $js ='http://lookup.tpay.me/idxml.ashx/js-staging?date='.$date.'&lang='.$lang.'&theme='.$theme.'&digest='.$digest;  
        echo '<script src="'.$js.'"></script></head>'; 

        echo '<b><span>HeaderEnrichment: Example developers.tpay.me</span></b>';
        
        
    }
    public function updatetransactionstatusAction(){
        echo '<b><span>UpdateTransactionStatus: Example developers.tpay.me</span></b>';
    }
    public function sendfreemtmessageAction(){
        echo '<b><span>SendFreeMTMessage: Example developers.tpay.me</span></b>';
        $web_serv_add = 'http://staging.tpay.me/api/TPay.svc?wsdl';

        $data = new sendFreeMTMessageRequest();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data,'SendFreeMTMessage');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
        
        
        
        
    }
    public function modifysubscriptionplanrequestAction(){
        echo '<b><span>ModifySubscriptionPlanRequest: Example developers.tpay.me</span></b>';

        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new ModifySubscriptionPlanRequest();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'ModifySubscriptionPlanRequest');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
    public function getencryptedmsisdnAction(){
        echo '<b><span>GetEncryptedMsisdn: Example developers.tpay.me</span></b>';

        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $data = new GetEncryptedMsisdn();
        $req = new sendSoapRequest($web_serv_add);
        $result = $req->sendSoapRequest($data->getArray(),'GetEncryptedMsisdn');

        $message  = $data->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        printResult($request,$result,$response,$message);
    }
}

class sendSoapRequest{
    public $client;
    public function __construct($url = null){
        //if(empty($url)){
            //getUrl
        //}

        $this->client = new SoapClient($url,
            array('features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                    'trace' => 1,
                    'exceptions' => 1,
                    'cache_wsdl' => WSDL_CACHE_NONE));
    }

    public function sendSoapRequest($params,$func){
        if(empty($params)){
            throw new Exception('Request Exception - Empty object', 6);
        }
        if(is_object($params)){
            $nameObject = get_class($params);
            $params = new SoapParam(new SoapVar($params, SOAP_ENC_OBJECT),$nameObject);
        }
        elseif(!is_array($params)){
            throw new Exception('Request Exception - Unavailable object type', 6);
        }

        $result = $this->client->$func($params);

        return $result;
    }
    public function getLastRequest(){
        if(!isset($this->client) || empty($this->client)){
            throw new Exception('Soap Request - No request made', 6);
        }
        return $this->client->__getLastRequest();
    }
    public function getLastResponse(){
        if(!isset($this->client) || empty($this->client)){
            throw new Exception('Soap Request - No request made', 6);
        }
        return $this->client->__getLastResponse();
    }
}
function printResult($request=null,$result = null,$response=null,$message = null){
    echo 
    '<div class="col-lg-12">'
    . ' App Request<br/>'
    . ' MESSAGE:<br/><pre><code><small>'.htmlentities($message).'</small></code></pre>'
    . ' <br/>REQUEST:<br/><pre><code><small>'.htmlentities($request).'</small></code></pre>'
    . ' <br/>RESPONSE:<br/><pre><code><small>'.htmlentities($response).'</small></code></pre></div>'
    . ' <br/>RESULT:<br/><pre><code><small>'.print_r($result,true).'</small></code></pre>'
    . '</div>'
    . '<div class="clearfix">&nbsp</div>';
}
class AddSubscriptionContractRequest{
    public $signature;                      //Mandatory - string
    public $customerAccountNumber;          //Mandatory - string
    public $msisdn;                         //Mandatory - string
    public $operatorCode;                   //Mandatory - string
    public $subscriptionPlanId;             //Mandatory - long
    public $initialPaymentproductId;        //Mandatory - string
    public $initialPaymentDate;             //Mandatory - string
    public $executeInitialPaymentNow;       //Mandatory - bool 
    public $recurringPaymentproductId;      //Mandatory - string
    public $productCatalogName;             //Mandatory - string
    public $executeRecurringPaymentNow;     //Mandatory - bool 
    public $contractStartDate;              //Mandatory - string
    public $contractEndDate;                //Mandatory - string
    public $autoRenewContract;              //Mandatory - bool 
    public $language;                       //Mandatory - MerchantLanguage = {Auto = 0, English = 1, Arabic = 2, French = 3}
    public $sendVerificationSMS;            //bool
    public $allowMultipleFreeStartPeriods;  //bool
    public $headerEnrichmentReferenceCode;  //string
    public $smsId;                          //string
    
    public function __construct($customerAccountNumber='testcustomer',$msisdn= '201069409370',$operatorCode= 'Mobinil-EGY',$subscriptionPlanId = 40481,$initialPaymentproductId= "Puzzle_game",$initialPaymentDate= "2017-06-21 16:18:42Z",$executeInitialPaymentNow = false,$recurringPaymentproductId = "Puzzle_game",$productCatalogName = "GamesZone",$executeRecurringPaymentNow = false,$contractStartDate = "2017-07-26 10:56:13Z",$contractEndDate = "2017-07-26 10:56:13Z",$autoRenewContract = true,$language = 'Auto',$sendVerificationSMS = true,$allowMultipleFreeStartPeriods= false,$headerEnrichmentReferenceCode = '',$smsId = '') {

        $customerAccountNumber='testcustomer';
        $msisdn= '201069409370';
        $operatorCode= 'mobinil-egy';
        $subscriptionPlanId = 40481;//long
        $initialPaymentproductId= "zm1";
        $initialPaymentDate= "2017-08-02 11:58:42z";
        $executeInitialPaymentNow = false;
        $recurringPaymentproductId = "zm1";
        $productCatalogName = "mobiplay/mobinil-egy/directbilling";
        $executeRecurringPaymentNow = false;
        $contractStartDate = "2017-08-02 11:58:42z";
        $contractEndDate = "2017-08-02 11:58:42z";
        $autoRenewContract = true;
        $language = 'Auto';
        $sendVerificationSMS = true;
        $allowMultipleFreeStartPeriods= false;
        $headerEnrichmentReferenceCode = '';
        $smsId = '';

/*
        $customerAccountNumber='testcustomer';
        $msisdn= '201069409370';
        $operatorCode= '60202';
        $subscriptionPlanId = 40453;
        $initialPaymentproductId= "3244234324";
        $initialPaymentDate= "2017-06-31 18:20:36z";
        $executeInitialPaymentNow = false;
        $recurringPaymentproductId = "puzzle_game";
        $productCatalogName = "gameszone";
        $executeRecurringPaymentNow = false;
        $contractStartDate = "2017-06-31 18:20:36z";
        $contractEndDate = "2017-06-31 18:20:36z";
        $autoRenewContract = true;
        $language = 'Auto';
        $sendVerificationSMS = true;
        $allowMultipleFreeStartPeriods= false;
        $headerEnrichmentReferenceCode = '';
        $smsId = '';
*/
        $this->customerAccountNumber = $customerAccountNumber;
        $this->msisdn = $msisdn;
        $this->operatorCode = $operatorCode;
        $this->subscriptionPlanId = $subscriptionPlanId;
        $this->initialPaymentproductId = $initialPaymentproductId;
        $this->initialPaymentDate = $initialPaymentDate;
        $this->executeInitialPaymentNow = $executeInitialPaymentNow;
        $this->recurringPaymentproductId = $recurringPaymentproductId;
        $this->productCatalogName = $productCatalogName;
        $this->executeRecurringPaymentNow = $executeRecurringPaymentNow;
        $this->contractStartDate = $contractStartDate;
        $this->contractEndDate = $contractEndDate;
        $this->autoRenewContract = $autoRenewContract;
        $this->language = $language;
        $this->sendVerificationSMS = $sendVerificationSMS;
        $this->allowMultipleFreeStartPeriods = $allowMultipleFreeStartPeriods;
        $this->headerEnrichmentReferenceCode = $headerEnrichmentReferenceCode;
        $this->smsId = $smsId;

        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);	
    }
    public function echoFields(){
        $html .= '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>customerAccountNumber:</b>'. $this->customerAccountNumber;
        $html .= '<br><b>msisdn:</b>'. $this->msisdn;
        $html .= '<br><b>operatorCode:</b>'. $this->operatorCode;
        $html .= '<br><b>subscriptionPlanId:</b>'. $this->subscriptionPlanId;
        $html .= '<br><b>initialPaymentproductId:</b>'. $this->initialPaymentproductId;
        $html .= '<br><b>initialPaymentDate:</b>'. $this->initialPaymentDate;
        $html .= '<br><b>executeInitialPaymentNow:</b>'. ($this->executeInitialPaymentNow == true ? 'true' : 'false');
        $html .= '<br><b>recurringPaymentproductId:</b>'. $this->recurringPaymentproductId;
        $html .= '<br><b>productCatalogName:</b>'. $this->productCatalogName;
        $html .= '<br><b>executeRecurringPaymentNow:</b>'. ($this->executeRecurringPaymentNow == true ? 'true' : 'false');
        $html .= '<br><b>contractStartDate:</b>'. $this->contractStartDate;
        $html .= '<br><b>contractEndDate:</b>'. $this->contractEndDate;
        $html .= '<br><b>autoRenewContract:</b>'. ($this->autoRenewContract == true ? 'true' : 'false');
        $html .= '<br><b>language:</b>'. $this->language;
        $html .= '<br><b>sendVerificationSMS:</b>'. ($this->sendVerificationSMS == true ? 'true' : 'false');
        $html .= '<br><b>allowMultipleFreeStartPeriods:</b>'. ($this->allowMultipleFreeStartPeriods ? 'true' : 'false');
        $html .= '<br><b>headerEnrichmentReferenceCode:</b>'. $this->headerEnrichmentReferenceCode;
        $html .= '<br><b>smsId:</b>'. $this->smsId;
        $html .= '<br><br>...............................................<br><br>';
        echo $html;
    }
    public function getMessage(){
        switch ($this->language) {
            case 'Auto':    $lang_msg = 0;break;
            case 'English': $lang_msg = 1;break;
            case 'Arabic':  $lang_msg = 2;break;
            case 'French':  $lang_msg = 3;break;
            default:        $lang_msg = 0;break;
        }
        
        $message = $this->customerAccountNumber;
        $message .=$this->msisdn;
        $message .=$this->operatorCode;
        $message .=$this->subscriptionPlanId;
        $message .=$this->initialPaymentproductId;
        $message .=$this->initialPaymentDate;
        $message .=$this->executeInitialPaymentNow == true ? 'true' : 'false';
        $message .=$this->recurringPaymentproductId;
        $message .=$this->productCatalogName;
        $message .=$this->executeRecurringPaymentNow == true ? 'true' : 'false';
        $message .=$this->contractStartDate;
        $message .=$this->contractEndDate;
        $message .=$this->autoRenewContract == true ? 'true' : 'false';
        $message .=$lang_msg;
        $message .=($this->sendVerificationSMS == true) ? 'true' : 'false';
        $message .=$this->allowMultipleFreeStartPeriods ? 'true' : 'false';
        $message .=$this->headerEnrichmentReferenceCode;
        $message .=$this->smsId;
        return $message;
    }
    public function getArray(){return array('request'=>$this);}
}

class ConfirmDirectPaymentTransaction{
    public $signature;
    public $transactionId;
    public $pinCode;

    public function __construct($transactionId="1234", $pinCode= "000000"){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->transactionId = $transactionId;
            $this->pinCode = $pinCode;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>pinCode:</b>'. $this->pinCode;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->transactionId;
        $message .=$this->pinCode;
        return $message;
    }
}
class SendSubscriptionContractVerificationSMS{
    public $signature;
    public $subscriptionContractId;

    public function __construct($subscriptionContractId="1234"){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        return $message;
    }
}
class SuspendSubscriptionContractRequest{
    public $signature;
    public $subscriptionContractId;

    public function __construct($subscriptionContractId="1234"){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        return $message;
    }
}
class PurgeSubscriptionContractRequest{
    public $signature;
    public $subscriptionContractId;

    public function __construct($subscriptionContractId="1234"){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        return $message;
    }
}
class CancelSubscriptionContractRequest{
    public $subscriptionContractId;
    public $cancellationProductCatalogName;
    public $cancellationProductId;
    public $cancellationDate;
    public $customerAccountNumber;

    public function __construct($subscriptionContractId="111234",$cancellationProductCatalogName = '11132',$cancellationProductId = '11132',$cancellationDate = '2017-08-02 10:42:00z',$customerAccountNumber = null){
        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->subscriptionContractId = strtolower((string)$subscriptionContractId);
        $this->cancellationProductCatalogName = strtolower((string)$cancellationProductCatalogName);
        $this->cancellationProductId = strtolower((string)$cancellationProductId);
        $this->cancellationDate = strtolower((string)$cancellationDate);
        if($customerAccountNumber !== null || $customerAccountNumber !== 'null'){
            $this->customerAccountNumber = strtolower((string)$customerAccountNumber);
        }else{
            $this->customerAccountNumber = null;
        }
        $this->customerAccountNumber = $customerAccountNumber;
        
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
        
        if($this->customerAccountNumber === null){
            $this->customerAccountNumber = 'null';
        }
    }

    public function getArray(){return array('request'=>$this);}

    public function echoFields(){
        $html = '<br><br>...............................................<br><br><b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>cancellationProductCatalogName:</b>'.$this->cancellationProductCatalogName;
        $html .= '<br><b>cancellationProductId:</b>'.$this->cancellationProductId;
        $html .= '<br><b>cancellationDate:</b>'.$this->cancellationDate;
        $html .= '<br><b>customerAccountNumber:</b>'.$this->customerAccountNumber;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }

    public function getMessage(){
        $message = $this->subscriptionContractId;
        $message .= $this->cancellationProductCatalogName;
        $message .= $this->cancellationProductId;
        $message .= $this->cancellationDate;
        $message .= empty($this->customerAccountNumber) || $this->customerAccountNumber === 'null' ? '' : $this->customerAccountNumber ;
        return $message;
    }
}
class SubscriptionCharging{
    public $customerSubscriptionId;
    public $batchId;
    public $transactionId;

    public function __construct($customerSubscriptionId="1234",$batchId = '132',$transactionId = '132'){
        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->customerSubscriptionId = $customerSubscriptionId;
        $this->batchId = $batchId;
        $this->transactionId = $transactionId;
    }

    public function getArray(){return (array)$this;}

    public function echoFields(){
        $html = '<br><br>...............................................<br><br><b>Campos:</b><br><br>';
        $html .= '<br><b>customerSubscriptionId:</b>'.$this->customerSubscriptionId;
        $html .= '<br><b>batchId:</b>'.$this->batchId;
        $html .= '<br><b>transactionId:</b>'.$this->transactionId;
        $html .= '<br><b>cancellationDate:</b>'.$this->cancellationDate;
        echo $html;
    }

    public function getMessage(){
        $message  =$this->customerSubscriptionId;
        $message  .=$this->batchId;
        $message  .=$this->transactionId;
        return $message;
    }
}
class GetSubscriptionContracts{
    public $subscriptionContractId;
    public $msisdn;
    public $customerAccountId;
    public $status;
    public $includeSubscriptionHistoryAndLogs;
    public $signature;
    public $dateFrom;
    public $dateTo;
    public $readFromArchive;

    public function __construct(
            $subscriptionContractId="1234"
            ,$msisdn = '132'
            ,$customerAccountId = '132'
            ,$status = '132'
            ,$includeSubscriptionHistoryAndLogs='1010'
            ,$dateFrom = '10-10-10'
            ,$dateTo ='10-10-10' 
            ,$readFromArchive='13'){

        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->subscriptionContractId = $subscriptionContractId;
        $this->msisdn = $msisdn;
        $this->customerAccountId = $customerAccountId;
        $this->status = $status;
        $this->includeSubscriptionHistoryAndLogs = $includeSubscriptionHistoryAndLogs;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->readFromArchive = $readFromArchive;
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }

    public function getArray(){return (array)$this;}

    public function echoFields(){
        $html = '<br><br>...............................................<br><br><b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>msisdn:</b>'.$this->msisdn;
        $html .= '<br><b>customerAccountId:</b>'.$this->customerAccountId;
        $html .= '<br><b>status:</b>'.$this->status;
        $html .= '<br><b>includeSubscriptionHistoryAndLogs:</b>'.$this->includeSubscriptionHistoryAndLogs;
        $html .= '<br><b>signature:</b>'.$this->signature;
        $html .= '<br><b>dateFrom:</b>'.$this->dateFrom;
        $html .= '<br><b>dateTo:</b>'.$this->dateTo;
        $html .= '<br><b>readFromArchive:</b>'.$this->readFromArchive;
        echo $html;
    }

    public function getMessage(){
        $message  =$this->subscriptionContractId;
        $message  .=$this->msisdn;
        $message  .=$this->customerAccountId;
        $message  .=$this->status;
        $message  .=$this->includeSubscriptionHistoryAndLogs;
        $message  .=$this->signature;
        $message  .=$this->dateFrom;
        $message  .=$this->dateTo;
        $message  .=$this->readFromArchive;
        return $message;
    }
}
class SendSubscriptionCancellationPinSMS{
    public $signature;
    public $subscriptionContractId;

    public function __construct($subscriptionContractId="1234"){
        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->subscriptionContractId = $subscriptionContractId;
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    
    public function getArray(){return (array)$this;}

    public function echoFields(){
        $html = '<br><br>...............................................<br><br><b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }

    public function getMessage(){
        $message  =$this->subscriptionContractId;
        $message  .=$this->subscriptionContractId;
        return $message;
    }
}
class VerifySubscriptionCancellationPin{
    public $signature;
    public $subscriptionContractId;
    public $pinCode;

    public function __construct($subscriptionContractId='1234',$pinCode = '1234'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->pinCode = $pinCode;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>pinCode:</b>'.$this->pinCode;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        $message  .=$this->pinCode;
        return $message;
    }
}
class HeaderEnrichment{ //Não percebi bem como isto funciona
    public $signature;
    public $subscriptionContractId;
    public $pinCode;

    public function __construct($subscriptionContractId='1234',$pinCode = '1234'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->pinCode = $pinCode;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>pinCode:</b>'.$this->pinCode;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        $message  .=$this->pinCode;
        return $message;
    }
}   
class UpdateTransactionStatus{ // não percebi muito bem como isto funciona
    public $signature;
    public $subscriptionContractId;
    public $pinCode;

    public function __construct($subscriptionContractId='1234',$pinCode = '1234'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->pinCode = $pinCode;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>pinCode:</b>'.$this->pinCode;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        $message  .=$this->pinCode;
        return $message;
    }
}
class sendFreeMTMessageRequest{ // não percebi muito bem como isto funciona
    public $signature;
    public $pinCode;
    public $messageBody;
    public $mtId;
    public $transactionId;
    public $orderInfo;
    public $msisdn;
    public $operatorCode;
    
    public function __construct($messageBody='111111234',$mtId = '11111234',$transactionId ='11111123',$orderInfo='1111112324', $msisdn='11111234', $operatorCode='Mobinil-EGY'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->messageBody = $messageBody;
            $this->mtId = $mtId;
            $this->transactionId = $transactionId;
            $this->orderInfo = $orderInfo;
            $this->msisdn = $msisdn;
            $this->operatorCode = $operatorCode;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>messageBody:</b>'.$this->messageBody;
        $html .= '<br><b>mtId:</b>'.$this->mtId;
        $html .= '<br><b>transactionId:</b>'.$this->transactionId;
        $html .= '<br><b>orderInfo:</b>'.$this->orderInfo;
        $html .= '<br><b>msisdn:</b>'.$this->msisdn;
        $html .= '<br><b>operatorCode:</b>'.$this->operatorCode;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message = $this->messageBody;
        $message .= $this->mtId;
        $message .= $this->transactionId;
        $message .= $this->orderInfo;
        $message .= $this->msisdn;
        $message .= $this->operatorCode;
        return $message;
    }
}
//---
class ModifySubscriptionPlanRequest{
    public $signature;
    public $targetSubscriptionPlanId;
    public $subscriptionPlanName;
    public $frequency;
    public $chargingMethod;
    public $subchargingParts;
    public $subchargingTimeGapTerm;
    public $subchargingTimeGapCount;
    public $chargingFailureRetrials;
    public $chargingRetrialsCount;
    public $chargingRetrialTimeGapTerm;
    public $chargingRetrialTimeGapCount;
    public $smsConfiguration;
    public $suspendContractAfterBillCollectionFailure;

    public function __construct($subscriptionContractId="1234",$targetSubscriptionPlanId='1234', $subscriptionPlanName='1234', $frequency='1234', $chargingMethod='1234', $subchargingParts='1234', $subchargingTimeGapTerm='1234', $subchargingTimeGapCount='1234', $chargingFailureRetrials='1234', $chargingRetrialsCount='12345',$chargingRetrialTimeGapTerm='12334', $chargingRetrialTimeGapCount='1234',$smsConfiguration='1234', $suspendContractAfterBillCollectionFailure='1234'){
        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->subscriptionContractId = $subscriptionContractId;
        $this->targetSubscriptionPlanId = $targetSubscriptionPlanId;
        $this->subscriptionPlanName = $subscriptionPlanName;
        $this->frequency = $frequency;
        $this->chargingMethod = $chargingMethod;
        $this->subchargingParts = $subchargingParts;
        $this->subchargingTimeGapTerm  =$subchargingTimeGapTerm;
        $this->subchargingTimeGapCount = $subchargingTimeGapCount;
        $this->chargingFailureRetrials = $chargingFailureRetrials;
        $this->chargingRetrialsCount = $chargingRetrialsCount;
        $this->chargingRetrialTimeGapTerm=  $chargingRetrialTimeGapTerm;
        $this->chargingRetrialTimeGapCount = $chargingRetrialTimeGapCount;
        $this->smsConfiguration = $smsConfiguration;
        $this->suspendContractAfterBillCollectionFailure = $suspendContractAfterBillCollectionFailure;
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        
        $this->subscriptionContractId;
        $this->targetSubscriptionPlanId;
        $this->subscriptionPlanName;
        $this->frequency;
        $this->chargingMethod;
        $this->subchargingParts;
        $this->subchargingTimeGapTerm;
        $this->subchargingTimeGapCount;
        $this->chargingFailureRetrials;
        $this->chargingRetrialsCount;
        $this->chargingRetrialTimeGapTerm;
        $this->chargingRetrialTimeGapCount;
        $this->smsConfiguration;
        $this->suspendContractAfterBillCollectionFailure;
        return $message;
    }
}
class GetEncryptedMsisdn{
    public $signature;
    public $msisdn;
    public $OperatorCode;
    public $datetime;
    
    public function __construct($msisdn='111111234',$OperatorCode = '11111234',$datetime ='11111123'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->msisdn = $msisdn;
            $this->OperatorCode = $OperatorCode;
            $this->datetime = $datetime;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html  = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>msisdn:</b>'.$this->msisdn;
        $html .= '<br><b>OperatorCode:</b>'.$this->OperatorCode;
        $html .= '<br><b>datetime:</b>'.$this->datetime;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message = $this->msisdn;
        $message .= $this->OperatorCode;
        $message .= $this->datetime;
        return $message;
    }
}
class ModifySubscriptionContractPlanInstance{
    public $signature;
    public $subscriptionContractId;
    public $subscriptionPlanName;
    public $frequency;
    public $chargingMethod;
    public $subchargingParts;
    public $subchargingTimeGapTerm;
    public $subchargingTimeGapCount;
    public $chargingFailureRetrials;
    public $chargingRetrialsCount;
    public $chargingRetrialTimeGapTerm;
    public $chargingRetrialTimeGapCount;
    public $smsConfiguration;
    public $suspendContractAfterBillCollectionFailure;
    
    public function __construct($msisdn='111111234',$OperatorCode = '11111234',$datetime ='11111123'){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->subscriptionPlanName = $subscriptionPlanName;
            $this->frequency = $frequency;
            $this->chargingMethod = $chargingMethod;
            $this->subchargingParts = $subchargingParts;
            $this->subchargingTimeGapTerm = $subchargingTimeGapTerm;
            $this->subchargingTimeGapCount = $subchargingTimeGapCount;
            $this->chargingFailureRetrials = $chargingFailureRetrials;
            $this->chargingRetrialsCount = $chargingRetrialsCount;
            $this->chargingRetrialTimeGapTerm = $chargingRetrialTimeGapTerm;
            $this->chargingRetrialTimeGapCount = $chargingRetrialTimeGapCount;
            $this->smsConfiguration = $smsConfiguration;
            $this->suspendContractAfterBillCollectionFailure = $suspendContractAfterBillCollectionFailure;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html  = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>subscriptionPlanName:</b>'.$this->subscriptionPlanName;
        $html .= '<br><b>frequency:</b>'.$this->frequency;
        $html .= '<br><b>chargingMethod:</b>'.$this->chargingMethod;
        $html .= '<br><b>subchargingParts:</b>'.$this->subchargingParts;
        $html .= '<br><b>subchargingTimeGapTerm:</b>'.$this->subchargingTimeGapTerm;
        $html .= '<br><b>subchargingTimeGapCount:</b>'.$this->subchargingTimeGapCount;
        $html .= '<br><b>chargingFailureRetrials:</b>'.$this->chargingFailureRetrials;
        $html .= '<br><b>chargingRetrialsCount:</b>'.$this->chargingRetrialsCount;
        $html .= '<br><b>chargingRetrialTimeGapTerm:</b>'.$this->chargingRetrialTimeGapTerm;
        $html .= '<br><b>chargingRetrialTimeGapCount:</b>'.$this->chargingRetrialTimeGapCount;
        $html .= '<br><b>smsConfiguration:</b>'.$this->smsConfiguration;
        $html .= '<br><b>suspendContractAfterBillCollectionFailure:</b>'.$this->suspendContractAfterBillCollectionFailure;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }
    public function getMessage(){
        $message = $this->msisdn;
        $message .= $this->OperatorCode;
        $message .= $this->datetime;
        $message .= $this->subscriptionContractId;
        $message .= $this->subscriptionPlanName;
        $message .= $this->frequency;
        $message .= $this->chargingMethod;
        $message .= $this->subchargingParts;
        $message .= $this->subchargingTimeGapTerm;
        $message .= $this->subchargingTimeGapCount;
        $message .= $this->chargingFailureRetrials;
        $message .= $this->chargingRetrialsCount;
        $message .= $this->chargingRetrialTimeGapTerm;
        $message .= $this->chargingRetrialTimeGapCount;
        $message .= $this->smsConfiguration;
        $message .= $this->suspendContractAfterBillCollectionFailure;
        return $message;
    }
}


//ModifySubscriptionContract
//ReactivateSubscriptionContract
//DirectPaymentTransaction
//ArrayOfsubscriptionContractShadow
//subscriptionContractShadow
//ArrayOfsubscriptionContractHistoryShadow
//ArrayOfsubscriptionLogDetailsShadow
//subscriptionLogAction
//SubscriptionCharging
//CancelSubscription
//SubscriptionRenewalReminder
//SubscriptionExpiration
//GetEncryptedMsisdn
//
//-----------------------------------------
//TPay
//-----------------------------------------
//
//InitializeDirectPaymentTransaction
//InitializePremiumDirectPaymentTransaction
//ResendVerificationPin
//ResendVerificationPinThroughIVR
//InAppDirectPaymentTransaction
//GetSmsShortCode
//PremiumSMSPaymentCheck
//PsmsSilentBilling
//PSMSPaymentRequest
//SendMTMessage
//AddHeaderEnrichmentVerification
//AuthenticateMerchantHeaderEnrichment
//GetOperatorIdByOperatorCode