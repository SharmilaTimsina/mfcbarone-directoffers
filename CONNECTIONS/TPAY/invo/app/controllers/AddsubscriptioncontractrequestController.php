<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class AddSubscriptionContractRequestController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('AddSubscriptionContractRequestController');
        parent::initialize();
    }

    public function indexAction(){echo 'Access denied';}

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequestController:</span></b><div/>';
        //<----goto config
        $customerAccountNumber = trim($this->request->get('msisdn','string','')).rand(100,999);
        $executeRecurringPaymentNow = 'false'; //goto config
        $executeInitialPaymentNow = 'false'; //goto config
        $initialPaymentDate_plus_time = '1'; // goto config!!!!!!!!!!!!!!!!!!!!!!!!!!1
        $contract_start_plus_time = '1'; // goto config!!!!!!!!!!!!!!!!!!!!!!!!!!
		$time_format = 'minute';
        $contract_end_plus_time = '5'; //go to config of product!!!!!!!!!!!!!!!!!!!!!
        $autoRenewContract = 'true';//go to config of product!!!!!!!!!!!!!!!!!!!!!
        $sendVerificationSMS = 'false';//goto config!!!!!!!!!!!!!!!!!!!!!
        $allowMultipleFreeStartPeriods = 'false'; //goto config!!!!!!!!!!!!!!!!!!!!!
        //goto config!!!!!!!!!!!!!!!!!!!!!!!!! --->

        $headerEnrichmentReferenceCode = trim($this->request->get('headerEnrichmentReferenceCode','string'));
        if(empty($headerEnrichmentReferenceCode)){
            $headerEnrichmentReferenceCode = '';
            $sendVerificationSMS = 'true';
        }

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
		
		$host = trim($this->request->get('contents_url','string',''));
        $host = trim(preg_replace('#^https?://#', '', $host),'/');
		
        $subscriptionPlanId = $this->request->get('subscriptionPlanId','float');
        $initialPaymentproductId = trim($this->request->get('initialPaymentproductId','string'));
        $recurringPaymentproductId = trim($this->request->get('recurringPaymentproductId','string'));
		
        $productCatalogName = trim($this->request->get('productCatalogName','string'));
		$support_mail = 'eg.support@zeta-mobile.com';
		$portal_url = 'myastro.eg.zmobs.com';
		$price = '2';
		$frequency = 'daily';
		$keyword_unsub = 'Unsub MA';
		$short_code = array('60201'=>'5030',	//Orange-EGY
							'60202'=>'6699',	//Vodafone-EGY
							'60203'=>'4565');	//Etisalat-EGY

        if(empty($msisdn) || empty($operatorCode) || 
                empty($subscriptionPlanId) || empty($initialPaymentproductId) || 
                    empty($recurringPaymentproductId) || empty($productCatalogName)){
            //Save failed request
            $return = array('result'=>'false');
            if(empty($headerEnrichmentReferenceCode)){
                ZetaFunctions::sendEndRespKeepProc('onAfterAddSubsWIFI('.json_encode($return).');');
            }else{
                ZetaFunctions::sendEndRespKeepProc('onAfterAddSubs('.json_encode($return).');');
            }
            //Save all data collected
            
            
            
            
            exit();
        }

		$hash = '';
        $params = array('customerAccountNumber' =>$customerAccountNumber,
			'msisdn'=> $msisdn,
			'operatorCode' => $operatorCode,
			'subscriptionPlanId' => $subscriptionPlanId,
			'initialPaymentproductId' => $initialPaymentproductId,
			'initialPaymentDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$initialPaymentDate_plus_time.' '.$time_format)),
			'executeInitialPaymentNow' => $executeInitialPaymentNow,
			'recurringPaymentproductId' => $recurringPaymentproductId,
			'productCatalogName' => $productCatalogName,
			'executeRecurringPaymentNow' => $executeRecurringPaymentNow,
			'contractStartDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$contract_start_plus_time.' '.$time_format)),
			'contractEndDate' => date('Y-m-d H:i:s\Z', strtotime(' + '.$contract_end_plus_time.' year')),
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
            'AddSubscriptionContractRequest' => APP_PATH.'app/library/TPay/AddSubscriptionContractRequest.php',
            'PortalsAccessController' => APP_PATH.'app/controllers/PortalsaccessController.php'));
        $loader->register();

        $data = new AddSubscriptionContractRequest();
        $data->mapParams($params);
        
        $req = new SoapTPay($data->ws_service_url);

        $result = $req->sendSoapRequest($data->getArray('request'),'AddSubscriptionContractRequest');

        
        if(empty($result)){
            //save data
            exit();
        }
        
        $result = $result->AddSubscriptionContractRequestResult;
        $res = false;
        $res_mt = false;
        $subscribed = 'false';

        if($result->operationStatusCode == 'Success' && $result->subscriptionContractStatus == 'New'){
            //return to form pin_code
            $res = 'true';

        }
        elseif($result->operationStatusCode == 'Success' && $result->subscriptionContractStatus == 'Active'){//ver qual é o retorno quando header enrichemnet
            //return to form pin_code
            $res = 'true';

            $loader->registerClasses(array('SendFreeMTMessage' => APP_PATH.'app/library/TPay/SendFreeMTMessage.php'));
            //echo '<b><span>SendFreeMTMessage: Example developers.tpay.me</span></b>';

            $paccess = new PortalsaccessController();
            $hash = $paccess->getClientHash($result->subscriptionContractId, $msisdn, $operatorCode);
            //GET CREATE HASH DE ACCESS_KEY!!!!!!!!!!

            $short_code = $short_code[$operatorCode];

            $message_body = '';
            switch ($language){
                case 'Arabic':
                    $message_body = 'شكراَ لإشتراكك فى خدمة "'.$productCatalogName.'" يمكنك الوصول الى حسابك و الإستمتاع بالخدمة من خلال زيارة موقعنا “'.$portal_url.'?zmuak='.$hash.'” سوف يتم خصم '.$price.' / '.$frequency.' لكى تتمكن من إلغاء الإشتراك الخاص بكم الرجاء تسجيل الدخول على الحساب الخاص بك و الضغط على إلغاء الإشتراك أو أرسل كلمة "'.$keyword_unsub.'" إلى $sho"'.$short_code.'". لاى استفسار تواصل معنا على '.$support_mail;
                    break;
                case 'Auto':
                    $message_body = 'Thanks for subscribing to "'.$productCatalogName.'" to enjoy your subscription visit “'.$portal_url.'?zmuak='.$hash.'”. You will be charged for "'.$price.' / '.$frequency.'", to unsubscribe please login to your account and click unsubscribe, or send "'.$keyword_unsub.'" to "'.$short_code.'". For any inquires please contact us on '.$support_mail;
                    break;
                case 'English': 
                    $message_body = 'Thanks for subscribing to "'.$productCatalogName.'" to enjoy your subscription visit “'.$portal_url.'?zmuak='.$hash.'”. You will be charged for "'.$price.' / '.$frequency.'", to unsubscribe please login to your account and click unsubscribe, or send "'.$keyword_unsub.'" to "'.$short_code.'". For any inquires please contact us on '.$support_mail;
                    break;
                case 'French': 
                    $message_body = 'Thanks for subscribing to "'.$productCatalogName.'" to enjoy your subscription visit “'.$portal_url.'?zmuak='.$hash.'”. You will be charged for "'.$price.' / '.$frequency.'", to unsubscribe please login to your account and click unsubscribe, or send "'.$keyword_unsub.'" to "'.$short_code.'". For any inquires please contact us on '.$support_mail;
                    break;
                default: 
                    $message_body = 'Thanks for subscribing to "'.$productCatalogName.'" to enjoy your subscription visit “'.$portal_url.'?zmuak='.$hash.'”. You will be charged for "'.$price.' / '.$frequency.'", to unsubscribe please login to your account and click unsubscribe, or send "'.$keyword_unsub.'" to "'.$short_code.'". For any inquires please contact us on '.$support_mail;
            }

            $send_mt_params = array(
                'messageBody'   => $message_body,
                'msisdn'        => $msisdn,
                'operatorCode'  => $operatorCode
            );
            $sendMT = new SendFreeMTMessage($send_mt_params);
            $req_mt = new SoapTPay($sendMT->ws_service_url);
            $result_MT = $req_mt->sendSoapRequest($sendMT->getArray('request'),'SendFreeMTMessage');
            
            $result_MT = $result_MT->SendFreeMTMessageResult;
            if($result_MT->messageDeliveryStatus == true){
                $res_mt = 'true';
            }

            //$message_mt  = $sendMT->getMessage();
            //$request_mt  = $req_mt->getLastRequest();
            //$response_mt = $req_mt->getLastResponse();
        }
        elseif($result->operationStatusCode == 'Error' && $result->errorMessage == 'This user already subscribed to the given product'){
            //"This user already subscribed to the given product"
            $res = 'true';
            $subscribed = 'true';

            $status = new SubscriptionStatus();
            $cli = $status->selStatus($host,null,$msisdn,$operatorCode);
			$hash = $cli[0]['user_hash_id'];
			
			if($hash == false){
				$hash = "no hash data";
			}
        }
		elseif($result->operationStatusCode == 'Error' && $result->errorMessage == 'Please enter valid phone number for the selected mobile operator.'){
            //"This user already subscribed to the given product"
            $res = 'false';
            $subscribed = 'Please insert a valid mobile number';
        }

        $return = array(
            'hash' => $hash,
            'customerAccountNumber' => $customerAccountNumber,
            'result_MT'=> $res_mt,
            'result'=>$res,
            'subscribed'=>$subscribed,
            'message' => !empty($sendMT) ? $sendMT->getMessage() : '',
            'request' => !empty($req_mt) ? $req_mt->getLastRequest() : '',
            'response' => !empty($req_mt) ? $req_mt->getLastResponse() : '',
            'message' => !empty($data) ? $data->getMessage() : '',
            'request' => !empty($req) ? $req->getLastRequest() : '',
            'response' => !empty($req) ? $req->getLastResponse() : '',
            'errorMessage' => !empty($result->errorMessage) ? $result->errorMessage : '',
            'operationStatusCode'=> !empty($result->operationStatusCode) ? $result->operationStatusCode : '',
            'paymentTransactionStatusCode'=> !empty($result->paymentTransactionStatusCode) ? $result->paymentTransactionStatusCode : '', 
            'subscriptionContractId'=> !empty($result->subscriptionContractId) ? $result->subscriptionContractId : '',
            'subscriptionContractStatus'=> !empty($result->subscriptionContractStatus) ?  $result->subscriptionContractStatus : ''
        );
        $this->view->disable();
        ob_end_clean();
        
        if(empty($headerEnrichmentReferenceCode)){
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAddSubsWIFI.call(zeta,'.json_encode($return).');');
        }else{
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAddSubs.call(zeta,'.json_encode($return).');');
            if($res == 'true'){
                $params_mt = array(
                    'signature'                =>empty($sendMT->signature)? null :$sendMT->signature,
                    'set_from'                 =>'Enriched - AddSubscriptionContractRequest',
                    'subscription_contract_id' =>empty($result->subscriptionContractId) ? null : $result->subscriptionContractId,//mandatory
                    'message_body'             =>empty($message_body)? null :$message_body,
                    'msisdn'                   =>empty($msisdn)? null :$msisdn,
                    'operator_code'            =>empty($operatorCode)? null : $operatorCode,
                    'message_delivery_status'  =>empty($result_MT->messageDeliveryStatus)? null :$result_MT->messageDeliveryStatus,
                    'error_message'            =>empty($result_MT->errorMessage)? null :$result_MT->errorMessage);
                $save_mt = new MTMessage();
                $save_mt->setParams($params_mt);
                $save_mt->insertReg();
            }
        }
        //Collect - DATA
        $save_params = array(
            'signature'                         =>$data->signature,
            'signature_message'                 =>$data->getMessage(),
            'customer_account_number'           =>$data->customerAccountNumber,
            'msisdn'                            =>$data->msisdn,
            'operator_code'                     =>$data->operatorCode,
            'subscription_plan_id'              =>$data->subscriptionPlanId,
            'initial_payment_product_id'        =>$data->initialPaymentproductId,
            'initial_payment_date'              =>$data->initialPaymentDate,
            'execute_initial_payment_now'       =>$data->executeInitialPaymentNow,
            'recurring_payment_product_id'      =>$data->recurringPaymentproductId,
            'product_catalog_name'              =>$data->productCatalogName,
            'execute_recurring_payment_now'     =>$data->executeRecurringPaymentNow,
            'contract_start_date'               =>$data->contractStartDate,
            'contract_end_date'                 =>$data->contractEndDate,
            'auto_renew_contract'               =>$data->autoRenewContract,
            'language'                          =>$data->language,
            'send_verification_sms'             =>empty($data->sendVerificationSMS)? 0 :$data->sendVerificationSMS,
            'allow_multiple_free_start_periods' =>empty($data->allowMultipleFreeStartPeriods)? 0 :$data->allowMultipleFreeStartPeriods,
            'header_enrichment_reference_code'  =>empty($data->headerEnrichmentReferenceCode)? null :$data->headerEnrichmentReferenceCode,
            'smsid'                             =>empty($data->smsId)? null :$data->smsId,
            'operation_status_code'             =>empty($result->operationStatusCode)?null:$result->operationStatusCode,
            'subscription_contract_id'          =>$result->subscriptionContractId,//mandatory
            'payment_transaction_status_code'   =>empty($result->paymentTransactionStatusCode)?null:$result->paymentTransactionStatusCode,
            'transaction_id'                    =>empty($result->transactionId)?null:$result->transactionId,
            'next_payment_date'                 =>$result->nextPaymentDate,//mandatory
            'error_message'                     =>empty($result->errorMessage)?null:$result->errorMessage,
            'subscription_contract_status'      =>empty($result->subscriptionContractStatus)?null:$result->subscriptionContractStatus);
        $save = new AddSubscriptionContract();
        $save->setParams($save_params);
        $res_insert = $save->insertReg();

		if($return['result'] == 'true' && $return['subscribed'] == 'false'){
			$host = trim($this->request->get('contents_url','string',''));
			$host = trim(preg_replace('#^https?://#', '', $host),'/');
			
			$params_status = array(
				'action'                   => 'AddSubscriptionContractRequest',
				'subscription_contract_id' => $result->subscriptionContractId,
				'customer_account_number'  => $customerAccountNumber,
				'status'                   => $result->subscriptionContractStatus,
				'reason'                   => null,
				'user_hash_id'             => $hash,
				'host'                     => $host
			);

			$save = new SubscriptionStatus();
			$save->setParams($params_status);
			$save->insertReg();
		}
        exit();
    }
}