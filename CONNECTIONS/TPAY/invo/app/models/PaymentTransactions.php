<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class PaymentTransactions extends Model
{
    private $id;
    private $created_at;
    private $action;
    private $subscription_contract_id;
    private $customer_account_number;
    private $payment_transaction_status_code;
    private $transaction_id;
    private $amount_charged;
    private $currency_code;
    private $payment_date;
    private $error_message;
    private $next_payment_date;
    private $product_catalog_name;
    private $product_id;
    private $bill_number;
    private $bill_action;
    private $msisdn;
    private $bill_amount;
    private $collected_amount;

    public function beforeCreate(){$this->created_at = new RawValue('now()');}
    //INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);
    
    public function insertReg(){
        try{
        
        $this->created_at = new RawValue('now()');
        $sql = 'INSERT INTO payment_transactions(created_at,
            action,subscription_contract_id,customer_account_number,payment_transaction_status_code,transaction_id,
            amount_charged,currency_code,payment_date,error_message,next_payment_date,
            product_catalog_name,product_id,bill_number,bill_action,msisdn,bill_amount,collected_amount)
        VALUES (NOW(),:action,:subscription_contract_id,:customer_account_number,
            :payment_transaction_status_code,:transaction_id,:amount_charged,:currency_code,
            :payment_date,:error_message,:next_payment_date,:product_catalog_name,:product_id,
            :bill_number,:bill_action,:msisdn,:bill_amount,:collected_amount)';

        $statement = $this->getDi()->getDb()->prepare($sql);
        $exe = $this->getDi()->getDb()->executePrepared($statement, 
            array('action'                         =>empty($this->action)?null:$this->action,
                'subscription_contract_id'         =>empty($this->subscription_contract_id)?null:(double)$this->subscription_contract_id,
                'customer_account_number'          =>empty($this->customer_account_number)?null:$this->customer_account_number,
                'payment_transaction_status_code'  =>empty($this->payment_transaction_status_code)?null:$this->payment_transaction_status_code,
                'transaction_id'                   =>empty($this->transaction_id)?null:(double)$this->transaction_id,
                'amount_charged'                   =>empty($this->amount_charged)?null:(double)$this->amount_charged,
                'currency_code'                    =>empty($this->currency_code)?null:$this->currency_code,
                'payment_date'                     =>empty($this->payment_date)?null:$this->payment_date,
                'error_message'                    =>empty($this->error_message)?null:$this->error_message,
                'next_payment_date'                =>empty($this->next_payment_date)?null:$this->next_payment_date,
                'product_catalog_name'             =>empty($this->product_catalog_name)?null:$this->product_catalog_name,
                'product_id'                       =>empty($this->product_id)?null:$this->product_id,
                'bill_number'                      =>empty($this->bill_number)?null:(double)$this->bill_number,
                'bill_action'                      =>empty($this->bill_action)?null:$this->bill_action,
                'msisdn'                           =>empty($this->msisdn)?null:$this->msisdn,
                'bill_amount'                      =>empty($this->bill_amount)?null:(double)$this->bill_amount,
                'collected_amount'                 =>empty($this->collected_amount)?null:(double)$this->collected_amount),
            array(
                'action'                          => \Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_contract_id'        => \Phalcon\Db\Column::TYPE_DOUBLE,
                'customer_account_number'         => \Phalcon\Db\Column::TYPE_VARCHAR,
                'payment_transaction_status_code' => \Phalcon\Db\Column::TYPE_VARCHAR,
                'transaction_id'                  => \Phalcon\Db\Column::TYPE_DOUBLE,
                'amount_charged'                  => \Phalcon\Db\Column::TYPE_DOUBLE,
                'currency_code'                   => \Phalcon\Db\Column::TYPE_VARCHAR,
                'payment_date'                    => \Phalcon\Db\Column::TYPE_VARCHAR,
                'error_message'                   => \Phalcon\Db\Column::TYPE_VARCHAR,
                'next_payment_date'               => \Phalcon\Db\Column::TYPE_VARCHAR,
                'product_catalog_name'            => \Phalcon\Db\Column::TYPE_VARCHAR,
                'product_id'                      => \Phalcon\Db\Column::TYPE_VARCHAR,
                'bill_number'                     => \Phalcon\Db\Column::TYPE_DOUBLE,
                'bill_action'                     => \Phalcon\Db\Column::TYPE_VARCHAR,
                'msisdn'                          => \Phalcon\Db\Column::TYPE_VARCHAR,
                'bill_amount'                     => \Phalcon\Db\Column::TYPE_DOUBLE,
                'collected_amount'                => \Phalcon\Db\Column::TYPE_DOUBLE));

            return true;
        }catch(Exception $e){
            //save error
            return false;
        }
    }

    public function setParams($params)
    {
        foreach($params as $key => $value){
            if($this->propertyExists($key,$params)){
                    //$this->$key = $this->getDi()->getDb()->escapeString($value);
                   $this->$key = $value; 
            }
        }
    }
    public function propertyExists($property,$params) { return property_exists($this, $property) || isset($params[$property]);}
}


    /*
    public function getCreatedAt(){return $this->created_at;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    public function getAction(){return $this->action;}
    public function setAction($action){$this->action = $this->getDi()->getDb()->escapeString($action);}
    public function getSubscriptionContractId(){return $this->subscription_contract_id;}
    public function setSubscriptionContractId($subscription_contract_id){$this->subscription_contract_id = $this->getDi()->getDb()->escapeString($subscription_contract_id);}
    public function getCustomerAccountNumber(){return $this->customer_account_number;}
    public function setCustomerAccountNumber($customer_account_number){$this->customer_account_number = $this->getDi()->getDb()->escapeString($customer_account_number);}

    public function getPaymentTransactionStatusCode(){return $this->payment_transaction_status_code;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    public function getCreatedAt(){return $this->created_at;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    public function getCreatedAt(){return $this->created_at;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    public function getCreatedAt(){return $this->created_at;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    public function getCreatedAt(){return $this->created_at;}
    public function setCreatedAt($created_at){$this->created_at = $this->getDi()->getDb()->escapeString($created_at);}
    */

    /* EXAMPLE
    $sql = 'SELECT id, njump, name, carriers, country, thumbnail,payout,status,visible,variable,DATE(insertTimestamp) AS idate FROM Packages WHERE status=1 AND visible=1 ORDER BY ' . $orderarray['corder'][0] . ' ' . $orderarray['torder'][0] . ' LIMIT 20 OFFSET ' . $pagelim;
    $statement2 = $this->getDi()->getDb()->prepare($sql);
    $exe = $this->getDi()->getDb()->executePrepared($statement2, array(), array());
    $response[0] = $exe->fetchAll(PDO::FETCH_ASSOC);
    
    
    $sql = 'UPDATE Packages set wlisted=:val WHERE njump=:hash';
    $statement2 = $this->getDi()->getDb()->prepare($sql);
    $exe = $this->getDi()->getDb()->executePrepared($statement2, 
            array('hash' => $hash, 'val' => $val), 
            array('hash' => \Phalcon\Db\Column::TYPE_VARCHAR, 'val' => \Phalcon\Db\Column::TYPE_INTEGER));
    */