<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class SendSubscriptionCancellationPinSMSController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('SendSubscriptionCancellationPinSMS');
        parent::initialize();
    }

    public function indexAction()
    {
        echo 'Access denied';
    }

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>SendSubscriptionCancellationPinSMS:</span></b><div/>';

        $subscription_contract_id = $this->request->get('subscriptionContractId','float');
        if(empty($subscription_contract_id)){
            //Save failed request
			$return = array('result'=>'false');
            ZetaFunctions::sendEndRespKeepProc('zeta.onAfterResendAddPinCode.call(zeta,'.json_encode($return).');');
            //Save all data collected
            
            
            
            exit();
        }

        $loader = new \Phalcon\Loader();
        $loader->registerClasses(array(
                    'BaseRequestFunction' => APP_PATH.'app/library/TPay/BaseRequestFunction.php',
                    'SoapTPay' => APP_PATH.'app/library/TPay/SoapTPay.php',
                    'SendSubscriptionCancellationPinSMS' => APP_PATH.'app/library/TPay/SendSubscriptionCancellationPinSMS.php'));

        $loader->register();

		$params = array('subscriptionContractId'=> $subscription_contract_id);
        $data = new SendSubscriptionCancellationPinSMS($params);
		$req = new SoapTPay($data->ws_service_url);
        $result = $req->sendSoapRequest($data->getArray(''),'SendSubscriptionCancellationPinSMS');        
        $result = $result->SendSubscriptionCancellationPinSMSResult;

        if($result->errorMessage == null && $result->operationStatusCode == 'Success' && !empty($result->subscriptionContractId)){
            $res = 'true';
        }else{
            $res = false;
        }

        $return = array(
            'result' => $res,
            'message' => $data->getMessage(),
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
        ZetaFunctions::sendEndRespKeepProc('zeta.onAfterResendAddPinCode.call(zeta,'.json_encode($return).');');
        //Save all data collected

        
        
        

		
		
		
        exit();
    }
}