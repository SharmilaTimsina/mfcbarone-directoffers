<?php
use Phalcon\Http\Request;
use Phalcon\Filter;

class RecurringPaymentTransactionPushController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('RecurringPaymentTransactionPush');
        parent::initialize();
    }

    public function indexAction()
    {
        echo 'Access denied';
    }

    //sample Url: ?action=SubscriptionChargingNotification&subscriptionContractId=10663&customerAccountNumber=1&paymentTransactionStatusC ode=PaymentCompletedSuccessfully&transactionId=1234&amountCharged=3&currencyCode=EGP&paymentDate=2017-01-16 09:28:45Z&errorMessage=&nextPaymentDate=2017-01-17 09:28:45Z&productCatalogName=Game&productId=game_sku_1&billNumber=2&billAction=RecurringPayment&msisdn=2012000000 00&billAmount=10.0&collectedAmount=10.0&digest=xaaA7NRFrBcY9GAy9ART%3ac44373e266177891c2f4bd98251c45eb109a63c85 037c8a45b95077f29bbde3e
    public function runAction(){
        
        //echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequestController:</span></b><div/>';        
        $public_key = 'gGU58u2njocHrYMbJcKA'; //getconfig
        $private_key = '59wW4vviKrhSTEeumLDx'; //getconfig

        $digest = trim($this->request->get('digest','string','')); //mandatory

        $digest = 'gGU58u2njocHrYMbJcKA:8f42d7be7f12aef55035b6710c60e1bbe454afdb8affafe978fdbb0d8b8680af'; //good

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


            exit();
        }
        
        ZetaFunctions::sendEndRespKeepProc('Success');
        //save data
        $params['action'] = $params['action'];
        $payment_transactions = new PaymentTransactions();
        $payment_transactions->setParams($params);

        
        $res= $payment_transactions->insertReg();
        
        /*
        if ($payment_transactions->save() == false)
        {
            //escrever no log
            foreach ($payment_transactions->getMessages() as $message) {
                $this->flash->error($message);
        }
        */

        exit();
    }
}