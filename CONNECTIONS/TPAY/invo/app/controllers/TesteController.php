<?php
use Phalcon\Http\Request;
use Phalcon\Filter;
class TesteController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('TesteController');
        parent::initialize();
    }

    public function indexAction()
    {

    }
	
	public function addsubscriptioncontractrequestAction(){    
        
        //echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequest:</span></b><div/>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';
        
        //<----goto config
        $customerAccountNumber = trim($this->request->get('msisdn','string')).rand(100,999);
        $executeRecurringPaymentNow = 'false'; //goto config
        $executeInitialPaymentNow = 'false'; //goto config
        $initialPaymentDate_plus_days = '1'; // goto config!!!!!!!!!!!!!!!!!!!!!!!!!!1
        $contract_start_plus_days = '1'; // goto config!!!!!!!!!!!!!!!!!!!!!!!!!!
        $contract_end_plus_days = '30'; //go to config of product!!!!!!!!!!!!!!!!!!!!!
        $autoRenewContract = 'true';//go to config of product!!!!!!!!!!!!!!!!!!!!!
        $sendVerificationSMS = 'false';//goto config!!!!!!!!!!!!!!!!!!!!!
        $allowMultipleFreeStartPeriods = 'false'; //goto config!!!!!!!!!!!!!!!!!!!!!
        //goto config!!!!!!!!!!!!!!!!!!!!!!!!! --->

        $headerEnrichmentReferenceCode = trim($this->request->get('headerEnrichmentReferenceCode','string'));
        if(empty($headerEnrichmentReferenceCode)){$headerEnrichmentReferenceCode = '';}
        
        $smsId  = trim($this->request->get('smsId','string'));
        if(empty($smsId)){$smsId = '';}

        $language = trim($this->request->get('language','string'));//go to config of product se empty!!!!!!!!!!!!!!!!!!!!!
        switch ($language){
            case '2': $language = 'Arabic';break;
            case '0': $language = 'Auto';break;
            case '1': $language = 'English';break;
            case '3': $language = 'French';break;
            default: if(!($language == 'Arabic' || $language == 'Auto' || $language == 'English' || $language == 'French')){$language == 'Auto';}
        }

        $msisdn = trim($this->request->get('msisdn','string'));
        $operatorCode = trim($this->request->get('operatorCode','string'));
        $subscriptionPlanId = $this->request->get('subscriptionPlanId','float');
        $initialPaymentproductId = trim($this->request->get('initialPaymentproductId','string'));
        $recurringPaymentproductId = trim($this->request->get('recurringPaymentproductId','string'));
        $productCatalogName = trim($this->request->get('productCatalogName','string'));

        $params = array('customerAccountNumber' =>$customerAccountNumber,
                        'msisdn'=> $msisdn,
                        'operatorCode' => $operatorCode,
                        'subscriptionPlanId' => $subscriptionPlanId,
                        'initialPaymentproductId' => $initialPaymentproductId,
                        'initialPaymentDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$initialPaymentDate_plus_days.' day')),
                        'executeInitialPaymentNow' => $executeInitialPaymentNow,
                        'recurringPaymentproductId' => $recurringPaymentproductId,
                        'productCatalogName' => $productCatalogName,
                        'executeRecurringPaymentNow' => $executeRecurringPaymentNow,
                        'contractStartDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$contract_start_plus_days.' day')),
                        'contractEndDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$contract_end_plus_days.' day')),
                        'autoRenewContract' => $autoRenewContract,
                        'language' => $language,
                        'sendVerificationSMS' => $sendVerificationSMS,
                        'allowMultipleFreeStartPeriods' => $allowMultipleFreeStartPeriods,
                        'headerEnrichmentReferenceCode' => $headerEnrichmentReferenceCode,
                        'smsId' => $smsId);

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'AddSubscriptionContractRequest' => APP_PATH.'app/library/TPay/AddSubscriptionContractRequest.php'));
        $loader->register();

        $data = new AddSubscriptionContractRequest($params);

        $req = new SoapTPay($web_serv_add);
		
        $result = $req->sendSoapRequest($data->getArray('request'),'AddSubscriptionContractRequest');
        
        $result = $result->AddSubscriptionContractRequestResult;
        if($result->errorMessage == null && $result->operationStatusCode == 'Success'){
            if($result->subscriptionContractStatus == 'New' && $result->paymentTransactionStatusCode == 'VerificationCodeSent'){
                //return to form pin_code
                $res = 'true';
                
            }
            elseif($result->subscriptionContractStatus == 'Active' && $result->paymentTransactionStatusCode == 'PaymentCompletedSuccessfully'){//ver qua é o retorno quando header enrichemnet
                //return to form pin_code
                $res = 'true';
                //"errorMessage": null,
                //"operationStatusCode": "Success",
                //"paymentTransactionStatusCode": "PaymentCompletedSuccessfully",
                //"subscriptionContractId": 372687,
                //"subscriptionContractStatus": "Active"
            }else{
                
            }
        }else{
            $res = false;
        }
		
		

        $return = array(
            'result'=>$res,
            'message' => $data->getMessage(),
            'request' => $req->getLastRequest(),
            'response' => $req->getLastResponse(),
            'errorMessage' => $result->errorMessage,
            'operationStatusCode'=> $result->operationStatusCode,
            'paymentTransactionStatusCode'=> $result->paymentTransactionStatusCode,
            'subscriptionContractId'=> $result->subscriptionContractId,
            'subscriptionContractStatus'=> $result->subscriptionContractStatus);
        //response - preparar data

        //printResult($request,$result,$response,$message);
        //$this->view->disable();

        //Create a response instance
        //$response = new \Phalcon\Http\Response();

        //Set the content of the response
        //$response->setContent(json_encode($result));

        //Return the response
        //return $response;

        $this->view->disable();
        ob_end_clean();
        
        if(empty($headerEnrichmentReferenceCode)){
            echo 'onAfterAddSubsWIFI('.json_encode($return).');';
        }else{
            echo 'onAfterAddSubs('.json_encode($return).');';
        }

        //$fail = 'Mensagem de erro';
        //echo 'fail('.json_encode($fail).');';

        exit();
    }

	public function verifysubscriptioncontractAction(){
        //echo '<div class="col-lg-12"><b><span>VerifySubscriptionContract:</span></b><div/>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $msisdn = trim($this->request->get('pinCode','string'));
        $subscriptionPlanId = $this->request->get('subscriptionContractId','float');
        $params = array('pinCode' =>$pinCode,	'subscriptionContractId'=> $subscriptionContractId);

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'VerifySubscriptionContract' => APP_PATH.'app/library/TPay/VerifySubscriptionContract.php'));
        $loader->register();

        $data = new VerifySubscriptionContract($params);

        $req = new SoapTPay($web_serv_add);
		
        $result = $req->sendSoapRequest($data->getArray('request'),'VerifySubscriptionContract');
        
        $result = $result->VerifySubscriptionContract;
        if($result->errorMessage == null && $result->operationStatusCode == 'Success' && !empty($result->subscriptionContractId)){
            $res = 'true';
        }else{
            $res = false;
        }
		
        $return = array(
            'result'=>$res,
            'message' => $data->getMessageParent(),
            'request' => $req->getLastRequest(),
            'response' => $req->getLastResponse(),
            'errorMessage' => $result->errorMessage,
            'operationStatusCode'=> $result->operationStatusCode,
            'subscriptionContractId'=> $result->subscriptionContractId);
        //response - preparar data

        //printResult($request,$result,$response,$message);
        //$this->view->disable();

        //Create a response instance
        //$response = new \Phalcon\Http\Response();

        //Set the content of the response
        //$response->setContent(json_encode($result));

        //Return the response
        //return $response;

        $this->view->disable();
        ob_end_clean();
        
        if(empty($headerEnrichmentReferenceCode)){
            echo 'onAfterAddSubsWIFI('.json_encode($return).');';
        }else{
            echo 'onAfterAddSubs('.json_encode($return).');';
        }

        //$fail = 'Mensagem de erro';
        //echo 'fail('.json_encode($fail).');';

        exit();
    }
	
	
}

