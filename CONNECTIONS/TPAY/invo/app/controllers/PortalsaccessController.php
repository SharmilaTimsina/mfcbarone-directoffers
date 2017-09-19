<?php

class PortalsAccessController extends ControllerBase
{
    public function initialize()
    {

    }
    
    public function indexAction(){
        echo 'access denied';
    }

    public function processCookieAuth()
    {
        $sessionId = trim($this->request->get('action','string',''));

        $expiration_auth_cookie = time() + (7 * 24 * 60 * 60);
        $expiration_sess_cookie = time() + (1800);// 30min
        
        //is_wifi
        //is_3g



        //fromLp
        //NoCookieWIFI
        //check if cookie
        //set session and set/refresh cookie
        //verify user
        //on cancel erase cookies
        //delete cookie

        if ($this->cookies->has("auth_hash")) {
            // Get the cookie
            $rememberMeCookie = $this->cookies->get('auth_hash');

            // Get the cookie's value
            $value = $rememberMeCookie->getValue();
        }

        //$nxt_expiration = time() + (7 * 24 * 60 * 60);
        //time()+3600;

        setcookie('auth_hash'     , 'hash');
        setcookie('on_subscribe'  , 'true');//se sim gerar um hash
        setcookie('sub_id'        , 'subId');
        setcookie('msisdn'        , 'msisdn');
        setcookie('operator'      , 'operator');
        setcookie('subscr_plan_id', 'subscr_plan_id');
        setcookie('catalog'       , 'catalog');
        setcookie('lang'          , 'language');
        setcookie('status'        , 'status');
        setcookie('session'       , 'session');

        // after the page reloads, print them out
        if (isset($_COOKIE)) {
            foreach ($_COOKIE as $name => $value) {
                $name = htmlspecialchars($name);
                $value = htmlspecialchars(print_r($value,true));
                echo "$name : $value <br />\n";
            }
        }
        //delete 1 cookie
        if (isset($_COOKIE['auth_hash'])) {
            unset($_COOKIE['auth_hash']);
            setcookie('auth_hash', '', time() - 3600, '/'); // empty value and old timestamp
        }
    }

	public function sendLoginAccessSMSLinkAction(){
        
        $msisdn       = trim($this->request->get('msisdn','string'));
        $operatorCode = trim($this->request->get('operatorCode','string'));
		$host 	      = trim($this->request->get('contents_url','string',''));
        $host 		  = trim(preg_replace('#^https?://#', '', $host),'/');
		$language = trim($this->request->get('language','string','2'));//go to config of product se empty!!!!!!!!!!!!!!!!!!!!!
        switch ($language){
            case '2': $language = 'Arabic';break;
            case '0': $language = 'Auto';break;
            case '1': $language = 'English';break;
            case '3': $language = 'French';break;
            default: if(!($language == 'Arabic' || $language == 'Auto' || $language == 'English' || $language == 'French')){$language == 'Auto';}
        }
		
		$message_body = '';
		switch ($language){
			case 'Arabic':
				$message_body = '('.$portal_url.'?zmuak='.$hash.')مرحبا بعودتك! استمتع بـ مياسترو على ';
				break;
			case 'Auto':
				$message_body = '('.$portal_url.'?zmuak='.$hash.')مرحبا بعودتك! استمتع بـ مياسترو على ';
				break;
			case 'English': 
				$message_body = 'Welcome back! Keep enjoying myAstro at ('.$portal_url.'?zmuak='.$hash.').';
				break;
			case 'French': 
				$message_body = 'Welcome back! Keep enjoying myAstro at ('.$portal_url.'?zmuak='.$hash.').';
				break;
			default: 
				$message_body = '('.$portal_url.'?zmuak='.$hash.')مرحبا بعودتك! استمتع بـ مياسترو على ';
		}
		
        if(empty($msisdn) || empty($operatorCode)){
            //Save failed request
            $return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterLogIn(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
            
            
            
            exit();
        }
		
		$status = new SubscriptionStatus();
		$cli = $status->selStatus($host,null,$msisdn,$operatorCode);
		$hash = $cli[0]['user_hash_id'];
			
		//if($hash == false){$hash = "no hash data";}
		
        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
            'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
            'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
            'SendFreeMTMessage' => APP_PATH.'app/library/TPay/SendFreeMTMessage.php'));
        $loader->register();

        $send_params = array(
            'messageBody'=>$message_body,
            'msisdn' => $msisdn,
            'operatorCode'=> $operatorCode
        );

        $send = new SendFreeMTMessage($send_params);
        $req = new SoapTPay($send->ws_service_url);
        $result = $req->sendSoapRequest($send->getArray('request'),'SendFreeMTMessage');

        $result = $result->SendFreeMTMessageResult;

		$res_mt = ($result->messageDeliveryStatus == true) ? 'true' : 'false';
		
        $message  = $send->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        $return = array('result'=>$res_mt,
            'message'=>$message,
            'request'=>$request,
            'response'=>$response
        );
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterLogIn.call(zeta,'.json_encode($return).');');

        $params = array( 
            'signature'                =>empty($send->signature)? null : $send->signature,
            'set_from'                 =>'PortalsAccess - sendLoginAccessSMSLink',
            'subscription_contract_id' =>empty($data->subscriptionContractId) ? null : $data->subscriptionContractId,//mandatory
            'message_body'             =>empty($message_body)? null :$message_body,
            'msisdn'                   =>empty($msisdn)? null :$msisdn,
            'operator_code'            =>empty($operatorCode)? null : $operatorCode,
            'message_delivery_status'  =>empty($result->messageDeliveryStatus)? null : $result->messageDeliveryStatus,
            'error_message'            =>empty($result->errorMessage)? null : $result->errorMessage);        

            $save_mt = new MTMessage();
            $save_mt->setParams($params);
            $save_mt->insertReg();

            exit();
    }
	
    public function sendAccessSMSLinkAction(){
        //get Hash do cliente - FAZER
        $cliente_access_hash = 'dvdkfjvndfkjvndfkvjndfvkjndf';
        //get MESSAGE - FAZER
        $message_body = 'Thanks for subscribing to “MyAstro” to enjoy your subscription visit “http://myastro.eg.zmobs.com/?zmu='.$cliente_access_hash.'”. You will be charged for "Price / frequency", to unsubscribe please login to your account and click unsubscribe, or send “keyword” to “short code”. For any inquires please contact us on "Support mail"';
        
        $msisdn       = trim($this->request->get('msisdn','string'));
        $operatorCode = trim($this->request->get('operatorCode','string'));
        
        if(empty($msisdn) || empty($operatorCode)){
            //Save failed request
            $return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAccessSMSLink(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
            
            
            
            exit();
        }

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
            'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
            'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
            'SendFreeMTMessage' => APP_PATH.'app/library/TPay/SendFreeMTMessage.php'));
        $loader->register();

        $send_params = array(
            'messageBody'=>$message_body,
            'msisdn' => $msisdn,
            'operatorCode'=> $operatorCode
        );

        $send = new SendFreeMTMessage($send_params);
        $req = new SoapTPay($send->ws_service_url);
        $result = $req->sendSoapRequest($send->getArray('request'),'SendFreeMTMessage');

        $result = $result->SendFreeMTMessageResult;

		$res_mt = ($result->messageDeliveryStatus == true) ? 'true' : 'false';
		
        $message  = $send->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();

        $return = array('result'=>$res_mt,
            'message'=>$message,
            'request'=>$request,
            'response'=>$response
        );
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAccessSMSLink.call(zeta,'.json_encode($return).');');

        $params = array( 
            'signature'                =>empty($send->signature)? null : $send->signature,
            'set_from'                 =>'PortalsAccess - sendAccessSMSLink',
            'subscription_contract_id' =>empty($data->subscriptionContractId) ? null : $data->subscriptionContractId,//mandatory
            'message_body'             =>empty($message_body)? null :$message_body,
            'msisdn'                   =>empty($msisdn)? null :$msisdn,
            'operator_code'            =>empty($operatorCode)? null : $operatorCode,
            'message_delivery_status'  =>empty($result->messageDeliveryStatus)? null : $result->messageDeliveryStatus,
            'error_message'            =>empty($result->errorMessage)? null : $result->errorMessage);        

            $save_mt = new MTMessage();
            $save_mt->setParams($params);
            $save_mt->insertReg();

            exit();
    }

    //Returns array with customer information for auth porposes or returns false if no active subscription
    public function verifyCustomerStatus($host,$user_hash_id=null,$msisdn=null,$operator_code=null)
    {
        if(empty($host) && !(!empty($hash) || (!empty($msisdn) && !empty($operator_code)))){return false;}

        $status = new SubscriptionStatus();
        if(!empty($user_hash_id)){
            $res = $status->selStatus($host,$user_hash_id);
            if(empty($res) && (!empty($msisdn) && !empty($operator_code))){
                $res = $status->selStatus($host,null,$msisdn,$operator_code);
                if(!empty($res)){
                    //set hash
                }
            }
        }else{
            $res = $status->selStatus($host,null,$msisdn,$operator_code);
        }
        if(empty($res)){ return false;}
        return $res;
    }

    //Cancel user from portal, this will remove cookies 
    //
    public function cancelUserFromPortal()
    {
        //get all clients status
        
        //Check for 
        
        
        
        
        
        
        
        
        
       
    }
    

    public function cancelNoCreditAfterSubscribedClients()
    {
        //get all clients status
        
        
        
        
        
        
        
        
        
        
        
       
    }
    
    public function cancelNoCreditClients()
    {
        //get all clients status
        
        //Check for 
        
        
        
        
        
        
        
        
        
       
        
        
    }

    public function getClientHash($subs_contract_id, $msisdn, $operator_code)
    {
        $key = uniqid();
        return $key;
    }
}