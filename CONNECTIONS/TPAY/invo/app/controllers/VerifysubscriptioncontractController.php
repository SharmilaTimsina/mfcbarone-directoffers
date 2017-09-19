<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class VerifySubscriptionContractController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('VerifySubscriptionContract');
        parent::initialize();
    }

    public function indexAction()
    {
        echo 'Access denied';
    }

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>VerifySubscriptionContract:</span></b><div/>';
        $web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

        $params = array(
            'pinCode' =>trim($this->request->get('pinCode','string')),
            'subscriptionContractId'=> $this->request->get('subscriptionContractId','float'),
        );

        $msisdn =       trim($this->request->get('msisdn','string'));
        $operatorCode = trim($this->request->get('operatorCode','string'));
        $productCatalogName = trim($this->request->get('productCatalogName','string'));

        //-- É necessário para a MO
        $productCatalogName = trim($this->request->get('productCatalogName','string'));
        $support_mail = 'eg.support@zeta-mobile.com';
        $portal_url = 'myastro.eg.zmobs.com';
        $price = '2';
        $frequency = 'daily';
        $keyword_unsub = 'Unsub MA';
        $short_code = array('60201'=>'5030', //Orange-EGY
                            '60202'=>'6699', //Vodafone-EGY
                            '60203'=>'4565'); //Etisalat-EGY
        $language = trim($this->request->get('language','string'));//go to config of product se empty!!!!!!!!!!!!!!!!!!!!!
        switch ($language){
            case '2': $language = 'Arabic';break;
            case '0': $language = 'Auto';break;
            case '1': $language = 'English';break;
            case '3': $language = 'French';break;
            default: if(!($language == 'Arabic' || $language == 'Auto' || $language == 'English' || $language == 'French')){$language == 'Auto';}
        }

        //--

        if(empty($params['pinCode']) || empty($params['subscriptionContractId'])){
            //Save failed request
            $return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterVerifyPinCodeAdd(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
            
            
            
            exit();
        }

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
            'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
            'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
            'VerifySubscriptionContract' => APP_PATH.'app/library/TPay/VerifySubscriptionContract.php',
            'SendFreeMTMessage' => APP_PATH.'app/library/TPay/SendFreeMTMessage.php',
            'PortalsAccessController' => APP_PATH.'app/controllers/PortalsaccessController.php'));
        $loader->register();

        $data = new VerifySubscriptionContract($params);
        $req = new SoapTPay($data->ws_service_url);
        $result = $req->sendSoapRequest($data->getArray(),'VerifySubscriptionContract');

        $result = $result->VerifySubscriptionContractResult;
        
        $res = false;
        $subscribed = false;
        if($result->errorMessage == null && $result->operationStatusCode == 'Success' && !empty($result->subscriptionContractId)){
            $res = 'true';
            $subscribed = 'false';
			
            $paccess = new PortalsAccessController();
            $hash = $paccess->getClientHash($result->subscriptionContractId, $msisdn, $operatorCode);
            //GET CREATE HASH DE ACCESS_KEY!!!!!!!!!!

            $short_code = $short_code[$operatorCode];

            $message_body = '';
            switch ($language){
                    case 'Arabic':
                            $message_body = 'شكراَ لإشتراكك فى خدمة "'.$productCatalogName.'" يمكنك الوصول الى حسابك و الإستمتاع بالخدمة من خلال زيارة موقعنا “ '.$portal_url.'?zmuak='.$hash.'” سوف يتم خصم '.$price.' / '.$frequency.' لكى تتمكن من إلغاء الإشتراك الخاص بكم الرجاء تسجيل الدخول على الحساب الخاص بك و الضغط على إلغاء الإشتراك أو أرسل كلمة "'.$keyword_unsub.'" إلى $sho"'.$short_code.'". لاى استفسار تواصل معنا على '.$support_mail;
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
                'messageBody'=>$message_body,
                'msisdn' => $msisdn,
                'operatorCode'=> $operatorCode
            );


            $sendMT = new SendFreeMTMessage($send_mt_params);
            $req_mt = new SoapTPay($sendMT->ws_service_url);
            $result_MT = $req_mt->sendSoapRequest($sendMT->getArray('request'),'SendFreeMTMessage');

            $result_MT = $result_MT->SendFreeMTMessageResult;

            $message_mt  = $sendMT->getMessage();
            $request_mt  = $req_mt->getLastRequest();
            $response_mt = $req_mt->getLastResponse();
            $params_mt = array( 
                'signature'                =>empty($sendMT->signature)? null : $sendMT->signature,
                'set_from'                 =>'WIFI - VerifyPinCode',
                'subscription_contract_id' =>empty($data->subscriptionContractId) ? null : $data->subscriptionContractId,//mandatory
                'message_body'             =>empty($message_body)? null :$message_body,
                'msisdn'                   =>empty($msisdn)? null :$msisdn,
                'operator_code'            =>empty($operatorCode)? null : $operatorCode,
                'message_delivery_status'  =>empty($result_MT->messageDeliveryStatus)? null : $result_MT->messageDeliveryStatus,
                'error_message'            =>empty($result_MT->errorMessage)? null : $result_MT->errorMessage);
        }
        elseif($result->errorMessage == 'Subscription Contract Is Already Verified' && $result->operationStatusCode == 'Error' && !empty($result->subscriptionContractId)){
            $res = 'true';
            $subscribed = 'true';
        }
        elseif($result->errorMessage == 'Exceed Max Attempt Reached Of Invalid Pin' && $result->operationStatusCode == 'Error'){
            $res = 'true';
            $subscribed = 'Exceed Max Attempt Reached Of Invalid Pin';
        }
        elseif((strtolower($result->operationStatusCode) == 'invalidpincode' || strtolower($result->errorMessage) == 'invalidpincode' || 
				strtolower($result->errorMessage) == 'invalid pin code' || strtolower($result->errorMessage) == 'invalid pincode') 
				&& ($result->operationStatusCode == 'Error')){
            $res = 'true';
            $subscribed = 'Invalid PIN code';
        }else{
            $res = 'false';
            $subscribed = 'false';
        }
		
        $return = array(
            'result'=>$res,
            'subscribed' => $subscribed,
            'hash' => $hash,
            'message' => $data->getMessage(),
            'request' => $req->getLastRequest(),
            'response' => $req->getLastResponse(),
            'errorMessage' => $result->errorMessage,
            'operationStatusCode'=> $result->operationStatusCode,
            'subscriptionContractId'=> $result->subscriptionContractId);
        $this->view->disable();
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterVerifyPinCodeAdd.call(zeta,'.json_encode($return).');');
        //Save all data collected
        
        $params_save = array(
            'signature'                 => $data->signature,
            'subscription_contract_id'  => $data->subscriptionContractId,
            'pin_code'                  => $data->pinCode,
            'operation_status_code'     => $result->operationStatusCode,
            'error_message'             => empty($result->errorMessage) ? null : $result->errorMessage,
            'msisdn'                    => empty($msisdn) ? null : $msisdn,
            'operator_code'             => empty($operatorCode) ? null : $operatorCode
        );
        
        $save = new VerifySubscription();
        $save->setParams($params_save);
        $save->insertReg();
        
        if($res == 'true'){
            $save_mt = new MTMessage();
            $save_mt->setParams($params_mt);
            $save_mt->insertReg();

            /*Fazer update à tabela status do registo NEW,ACTIVE com o hash, o ACTIVE é po caso de a push notification já ter sido enviada*/
            $save = new SubscriptionStatus();
            $save->updHashOnStatus($data->subscriptionContractId,$hash);
        }
        
        
        
        /* -> because the first status was NEW in here we receive a push notification so will be duplicated
        $params_save = array(
            'signature'                 => $data->signature,
            'subscription_contract_id'  => $data->subscriptionContractId,
            'pin_code'                  => $data->pinCode,
            'operation_status_code'     => $result->operationStatusCode,
            'error_message'             => empty($result->errorMessage) ? null : $result->errorMessage,
            'msisdn'                    => empty($msisdn) ? null : $msisdn,
            'operator_code'             => empty($operatorCode) ? null : $operatorCode
        );
        
        $host = trim($this->request->get('contents_url','string',''));
        $host = trim(preg_replace('#^https?://#', '', $host),'/');
        
        $params_status = array(
            'action'                   => 'VerifySubscriptionContract',
            'subscription_contract_id' => $data->subscriptionContractId,
            'customer_account_number'  => trim($this->request->get('customerAccountNumber','string','')),//mandatory
            'status'                   => 'Active',
            'reason'                   => null,
            'host'                     => $host
        );
        
        $save = new SubscriptionStatus();
        $save->setParams($params_status);
        $save->insertReg();
        */
        exit();
    }
}