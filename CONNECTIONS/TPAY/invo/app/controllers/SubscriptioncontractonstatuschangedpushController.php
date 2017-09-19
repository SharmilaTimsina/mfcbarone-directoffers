<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class SubscriptionContractOnStatusChangedPushController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('SubscriptionContractOnStatusChangedPush');
        parent::initialize();
    }

    public function indexAction()
    {
        echo 'Access denied';
    }

    public function runAction(){
        //echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequestController:</span></b><div/>';
		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|NEW ACCESS:'.$actual_link.PHP_EOL,FILE_APPEND);
        
        $public_key = 'gGU58u2njocHrYMbJcKA'; //getconfig
        $private_key = '59wW4vviKrhSTEeumLDx'; //getconfig

        //Sample URL ?msisdn=201200000000&shortCode=5030&messagebody=test&mcc=602&mnc=01&smsgwmtid=03060147&MO_ID=0&digest=rRpDbLBkNjdb8HHxYC25:91c7083f5ec2df47ebcd5f06887e3376413f3d57a3d36a7dad5b0389babc20b6
        
        $digest = trim($this->request->get('digest','string')); //mandatory)
        
        if(empty($digest)){
            ZetaFunctions::sendEndRespKeepProc('access denied');
            //digest error 
            //save on error

            exit();
        }
        
        $action = strtolower(trim($this->request->get('action','string','')));
        $type_notification = false;
        
        if(!empty($action) && $action === 'subscriptioncontractstatuschanged'){
            $digest = trim($this->request->get('digest','string')); //mandatory

            $params = array(
                'action' => trim($this->request->get('action','string','')),//mandatory
                'subscription_contract_id' => trim($this->request->get('subscriptionContractId','float','')),//mandatory
                'customer_account_number' => trim($this->request->get('customerAccountNumber','string','')),//mandatory
                'status' => trim($this->request->get('status','string','')),//Active,Suspended,Purged,Cancelled,PendingOnCallback, //mandatory
                'reason' => trim($this->request->get('reason','string',null))
            );

            $message = trim($params['action'].$params['subscription_contract_id'].$params['customer_account_number'].$params['status'].$params['reason']);
            $signature = trim($public_key.':'.hash_hmac('sha256', $message, $private_key));

            if($signature != $digest){
                ZetaFunctions::sendEndRespKeepProc('access denied');
                //digest error 
                //save on error
				
				file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|subscriptioncontractstatuschanged:digest_failed'.print_r($params,true),FILE_APPEND);

                exit();
            }
            
            $subs = new SubscriptionStatus();
            $subs->setParams($params);
            $res = $subs->insertReg();
            
            
            
            if($res === true)
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Success')));
            else
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Failed')));
        }
        elseif(!empty($action) && $action === 'subscriptionchargingnotification'){
            //sample Url: ?action=SubscriptionContractStatusChanged&subscriptionContractId=10663&customerAccountNumber=1&status=Suspended&reason=&digest=gGU58u2njocHrYMbJcKA:8f42d7be7f12aef55035b6710c60e1bbe454afdb8affafe978fdbb0d8b8680af

            $digest = trim($this->request->get('digest','string','')); //mandatory
            //$digest = 'gGU58u2njocHrYMbJcKA:8f42d7be7f12aef55035b6710c60e1bbe454afdb8affafe978fdbb0d8b8680af'; //good

            $params = array(
                'action'                          => trim($this->request->get('action','string','')),//mandatory
                'subscription_contract_id'        => trim($this->request->get('subscriptionContractId','float','')),//mandatory
                'customer_account_number'         => trim($this->request->get('customerAccountNumber','string','')),//mandatory
                'payment_transaction_status_code' => trim($this->request->get('paymentTransactionStatusCode','string','')),//mandatory
                'transaction_id'                  => trim($this->request->get('transactionId','float','')),//mandatory
                'amount_charged'                  => trim($this->request->get('amountCharged','float','')),//mandatory
                'currency_code'                   => trim($this->request->get('currencyCode','string','')),//mandatory
                'payment_date'                    => trim($this->request->get('paymentDate','string','')), 
                'error_message'                   => trim($this->request->get('errorMessage','string','')),
                'next_payment_date'               => trim($this->request->get('nextPaymentDate','string','')),//mandatory
                'product_catalog_name'            => trim($this->request->get('productCatalogName','string','')),//mandatory
                'product_id'                      => trim($this->request->get('productId','string','')),//mandatory
                'bill_number'                     => trim($this->request->get('billNumber','float','')),//not included in the digest calculation
                'bill_action'                     => trim($this->request->get('billAction','string','')),//not included in the digest calculation//RecurringPayment - RetrailPayment - RetrailFallbackPayment
                'msisdn'                          => trim($this->request->get('msisdn','float','')),//not included in the digest calculation
                'bill_amount'                     => trim($this->request->get('billAmount','float','')),//not included in the digest calculation
                'collected_amount'                => trim($this->request->get('collectedAmount','float',''))//not included in the digest calculation
            );

            $message = $params['action'].$params['subscription_contract_id'].$params['customer_account_number'].$params['payment_transaction_status_code'].$params['transaction_id'].$params['amount_charged'].$params['currency_code'].$params['payment_date'].$params['error_message'].$params['next_payment_date'].$params['product_catalog_name'];
            $signature = $public_key.':'.hash_hmac('sha256', $message, $private_key);

            if($signature != $digest){
                ZetaFunctions::sendEndRespKeepProc('access denied');
                //savelog
				file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|subscriptionchargingnotification:digest_failed'.print_r($params,true),FILE_APPEND);

                exit();
            }

            
            //save data
            $params['action'] = $params['action'];
            $payment_transactions = new PaymentTransactions();
            $payment_transactions->setParams($params);

            $res = $payment_transactions->insertReg();
            
            if($res === true)
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Success')));
            else
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Failed')));

            exit();
        }else{
            //check if is MO notification
            file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|NO ACTION:'.print_r($params,true),FILE_APPEND);
            
            //$digest = 'gGU58u2njocHrYMbJcKA:8f42d7be7f12aef55035b6710c60e1bbe454afdb8affafe978fdbb0d8b8680af'; //good
            /*    
            $params = array(
                'msisdn'        => trim($this->request->get('msisdn','string','')),     //mandatory
                'short_code'    => trim($this->request->get('shortCode','float','')),   //mandatory
                'message_body'  => trim($this->request->get('messagebody','string','')),//mandatory
                'mcc'           => trim($this->request->get('mcc','string','')),        //mandatory
                'mnc'           => trim($this->request->get('mnc','float','')),         //mandatory
                'sms_gwmt_id'   => trim($this->request->get('smsgwmtid','float','')),   //mandatory
                'mo_id'         => trim($this->request->get('mo_id','string',''))       //optional
            );

            $message = $params['msisdn'].$params['short_code'].$params['message_body'].$params['mcc'].$params['mnc'].$params['sms_gwmt_id'].$params['mo_id'];
            $signature = $public_key.':'.hash_hmac('sha256', $message, $private_key);

            if($signature != $digest){
                ZetaFunctions::sendEndRespKeepProc('access denied');
                //savelog


                exit();
            }

            $mo_cancel_notification = new PaymentTransactions();
            $payment_transactions->setParams($params);

            $res = $payment_transactions->insertReg();
            
            if($res === true)
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Success')));
            else
                ZetaFunctions::sendEndRespKeepProc(json_encode(array('operatorCode'=>'Failed')));

            exit();
            */
        }
        exit();
    }
}