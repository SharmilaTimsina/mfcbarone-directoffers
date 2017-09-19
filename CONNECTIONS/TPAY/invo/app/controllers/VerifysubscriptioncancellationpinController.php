<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class VerifySubscriptionCancellationPinController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('VerifySubscriptionCancellationPin');
        parent::initialize();
    }

    public function indexAction()
    {
        echo 'Access denied';
    }

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>VerifySubscriptionCancellationPin:</span></b><div/>';        
        //---
        //do some security verification
        //---
		
        $pin_code = trim($this->request->get('pinCode','string'));
        $subscription_contract_id = $this->request->get('subscriptionContractId','float');
        
        if(empty($pin_code) || empty($subscription_contract_id)){
            //Save failed request
            $return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterSendVerifyCancelPinCode.call(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
			
			
			
			
            exit();
        }
		
        $params = array(
            'pinCode' =>$pin_code,
            'subscriptionContractId'=> $subscription_contract_id);
		
        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'VerifySubscriptionCancellationPin' => APP_PATH.'app/library/TPay/VerifySubscriptionCancellationPin.php'));
        $loader->register();
		
        $data = new VerifySubscriptionCancellationPin($params);
        $req = new SoapTPay($data->ws_service_url);
        $result = $req->sendSoapRequest($data->getArray(''),'VerifySubscriptionCancellationPin');
		
        $result = $result->VerifySubscriptionCancellationPinResult;
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
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterSendVerifyCancelPinCode.call(zeta,'.json_encode($return).');');
        //Save all data collected
		
        
        
        
        
        
        
        
		
		
		
		
        exit();
    }
}