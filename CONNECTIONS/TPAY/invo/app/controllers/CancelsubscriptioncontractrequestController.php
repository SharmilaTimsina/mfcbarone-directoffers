<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class CancelSubscriptionContractRequestController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('CancelSubscriptionContractRequest');
        parent::initialize();
    }

    public function indexAction(){echo 'Access denied';}

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>CancelSubscriptionContractRequest:</span></b><div/>';

        //---
        //do some security verification
        //---

        $pin_code = trim($this->request->get('pinCode','string'));
        $subscription_contract_id = $this->request->get('subscriptionContractId','float');
        
        if(empty($pin_code) || empty($subscription_contract_id)){
            //Save failed request
            $return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterVerifyPinCodeAdd.call(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            exit();
        }

        $params = array(
            'pinCode' =>$pin_code,
            'subscriptionContractId'=> $subscription_plan_id);

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'CancelSubscriptionContractRequest' => APP_PATH.'app/library/TPay/CancelSubscriptionContractRequest.php'));
        $loader->register();

        $data = new CancelSubscriptionContractRequest($params);
        $req = new SoapTPay($data->ws_service_url);
        $result = $req->sendSoapRequest($data->getArray('request'),'CancelSubscriptionContractRequest');

        $result = $result->CancelSubscriptionContractRequest;
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

        $this->view->disable();
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterVerifyPinCodeCancel.call(zeta,'.json_encode($return).');');
        //Save all data collected
        
        
        
        exit();
    }
}