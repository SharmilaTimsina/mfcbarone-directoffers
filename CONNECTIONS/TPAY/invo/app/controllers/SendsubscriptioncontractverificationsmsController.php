<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class SendSubscriptionContractVerificationSMSController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('SendSubscriptionContractVerificationSMS');
        parent::initialize();
    }

    public function indexAction(){echo 'Access denied';}

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>SendSubscriptionContractVerificationSMS:</span></b><div/>';

        $subscription_contract_id = $this->request->get('subscriptionContractId','float');
        $params = array('subscriptionContractId'=> $subscription_contract_id);

        if(empty($subscription_contract_id)){
            //Save failed request
            $return = array('result'=>'false','message_error'=>'NO FIELDS');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAskPinCodeAddResend.call(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
            exit();
        }

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'SendSubscriptionContractVerificationSMS' => APP_PATH.'app/library/TPay/SendSubscriptionContractVerificationSMS.php'));

        $loader->register();

        $data = new SendSubscriptionContractVerificationSMS($params);
        $req = new SoapTPay($data->ws_service_url);
        $result = $req->sendSoapRequest($data->getArray(''),'SendSubscriptionContractVerificationSMS');
        $result = $result->SendSubscriptionContractVerificationSMSResult;

        if($result->errorMessage == null && $result->operationStatusCode == 'Success' && !empty($result->subscriptionContractId)){
            $res = 'true';
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
            'subscriptionContractId'=> $result->subscriptionContractId);

        $this->view->disable();
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterAskPinCodeAddResend.call(zeta,'.json_encode($return).');');
		
        //Save all data collected
        
        
        
        exit();
    }
}