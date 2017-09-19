<?php

class PortalsAccessController extends ControllerBase
{
    public function initialize()
    {

    }
	public function index()
    {
		echo 'access denied';
    }
	
    public function sendAccessSMSLinkAction(){

        //get Hash do cliente - FAZER
        $cliente_access_hash = 'dvdkfjvndfkjvndfkvjndfvkjndf';
        //get MESSAGE - FAZER
        
        $message_body = 'Thanks for subscribing to “MyAstro” to enjoy your subscription visit “http://myastro.eg.zmobs.com/?zmuak='.$cliente_access_hash.'”. You will be charged for "Price / frequency", to unsubscribe please login to your account and click unsubscribe, or send “keyword” to “short code”. For any inquires please contact us on "Support mail"';
        
        $msisdn =       trim($this->request->get('msisdn','string'));
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

        $message  = $send->getMessage();
        $request  = $req->getLastRequest();
        $response = $req->getLastResponse();
        
        $return = array('result'=>'true',
            'message'=>$message,
            'request'=>$request,
            'response'=>$response
        );
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAccessSMSLink(zeta,'.json_encode($return).');');

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
    
    public function verifyClient()
    {
        if ($this->cookies->has("auth_hash")) {
            // Get the cookie
            $rememberMeCookie = $this->cookies->get('rememberme');

            // Get the cookie's value
            $value = $rememberMeCookie->getValue();
        }

        $nxt_expiration = time() + (7 * 24 * 60 * 60);

        setcookie('auth_hash'     , 'hash');
        setcookie('sub_id'        , 'subId');
        setcookie('msisdn'        , 'msisdn');
        setcookie('operator'      , 'operator');
        setcookie('subscr_plan_id', 'subscr_plan_id');
        setcookie('catalog'       , 'catalog');
        setcookie('lang'          , 'language');
        setcookie('status'        , 'status');
        setcookie('session'       , 'session');

        //setcookie("cookie[one]", "cookieone");
        echo '<br>second phase<br>';
        // after the page reloads, print them out
        if (isset($_COOKIE['cookie'])) {
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
}
