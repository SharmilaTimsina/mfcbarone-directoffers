<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class AddSubscriptionContract extends Model
{
    public $id;
    public $signature;
    public $signature_message;
    public $customer_account_number;
    public $msisdn;
    public $operator_code;
    public $subscription_plan_id;
    public $initial_payment_product_id;
    public $initial_payment_date;
    public $execute_initial_payment_now;
    public $recurring_payment_product_id;
    public $product_catalog_name;
    public $execute_recurring_payment_now;
    public $contract_start_date;
    public $contract_end_date;
    public $auto_renew_contract;
    public $language;
    public $send_verification_sms;
    public $allow_multiple_free_start_periods;
    public $header_enrichment_reference_code;
    public $smsid;
    public $operation_status_code;
    public $subscription_contract_id;
    public $payment_transaction_status_code;
    public $transaction_id;
    public $next_payment_date;
    public $error_message;

    
    public function beforeCreate(){$this->created_at = new RawValue('now()');}

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
    
    public function insertReg(){
        try{
            $sql = 'INSERT INTO add_subscription_contract(created_at,signature,signature_message,customer_account_number,
                        msisdn,operator_code,subscription_plan_id,initial_payment_product_id,initial_payment_date,
                        execute_initial_payment_now,recurring_payment_product_id,product_catalog_name,
                        execute_recurring_payment_now,contract_start_date,contract_end_date,auto_renew_contract,
                        language,send_verification_sms,allow_multiple_free_start_periods,
                        header_enrichment_reference_code,smsid,operation_status_code,subscription_contract_id,
                        payment_transaction_status_code,transaction_id,next_payment_date,
                        error_message,subscription_contract_status)
            VALUES (NOW(),:signature,:signature_message,:customer_account_number,
                        :msisdn,:operator_code,:subscription_plan_id,:initial_payment_product_id,:initial_payment_date,
                        :execute_initial_payment_now,:recurring_payment_product_id,:product_catalog_name,
                        :execute_recurring_payment_now,:contract_start_date,:contract_end_date,:auto_renew_contract,
                        :language,:send_verification_sms,:allow_multiple_free_start_periods,
                        :header_enrichment_reference_code,:smsid,:operation_status_code,:subscription_contract_id,
                        :payment_transaction_status_code,:transaction_id,:next_payment_date,
                        :error_message,:subscription_contract_status)';

        $statement = $this->getDi()->getDb()->prepare($sql);
        $exe = $this->getDi()->getDb()->executePrepared($statement, 
            array(
                'signature'                         =>empty($this->signature) ? null : $this->signature,
                'signature_message'                 =>empty($this->signature_message) ? null : $this->signature_message,
                'customer_account_number'           =>empty($this->customer_account_number) ? null : $this->customer_account_number,
                'msisdn'                            =>empty($this->msisdn) ? null : $this->msisdn,
                'operator_code'                     =>empty($this->operator_code) ? null : $this->operator_code,
                'subscription_plan_id'              =>empty($this->subscription_plan_id) ? null : $this->subscription_plan_id,
                'initial_payment_product_id'        =>empty($this->initial_payment_product_id) ? null : $this->initial_payment_product_id,
                'initial_payment_date'              =>empty($this->initial_payment_date) ? null : $this->initial_payment_date,
                'execute_initial_payment_now'       =>empty($this->execute_initial_payment_now) ? null : $this->execute_initial_payment_now,
                'recurring_payment_product_id'      =>empty($this->recurring_payment_product_id) ? null : $this->recurring_payment_product_id,
                'product_catalog_name'              =>empty($this->product_catalog_name) ? null : $this->product_catalog_name,
                'execute_recurring_payment_now'     =>empty($this->execute_recurring_payment_now) ? null : $this->execute_recurring_payment_now,
                'contract_start_date'               =>empty($this->contract_start_date) ? null : $this->contract_start_date,
                'contract_end_date'                 =>empty($this->contract_end_date) ? null : $this->contract_end_date,
                'auto_renew_contract'               =>empty($this->auto_renew_contract) ? null : $this->auto_renew_contract,
                'language'                          =>empty($this->language) ? null : $this->language,
                'send_verification_sms'             =>empty($this->send_verification_sms) ? null : $this->send_verification_sms,
                'allow_multiple_free_start_periods' =>empty($this->allow_multiple_free_start_periods) ? null : $this->allow_multiple_free_start_periods,
                'header_enrichment_reference_code'  =>empty($this->header_enrichment_reference_code) ? null : $this->header_enrichment_reference_code,
                'smsid'                             =>empty($this->smsId) ? null : $this->smsId,
                'operation_status_code'             =>empty($this->operation_status_code) ? null : $this->operation_status_code,
                'subscription_contract_id'          =>empty($this->subscription_contract_id) ? null : $this->subscription_contract_id,//mandatory
                'payment_transaction_status_code'   =>empty($this->payment_transaction_status_code) ? null : $this->payment_transaction_status_code,
                'transaction_id'                    =>empty($this->transaction_id) ? null : $this->transaction_id,
                'next_payment_date'                 =>empty($this->next_payment_date) ? null : $this->next_payment_date,//mandatory
                'error_message'                     =>empty($this->error_message) ? null : $this->error_message,
                'subscription_contract_status'      =>empty($this->subscription_contract_status) ? null : $this->subscription_contract_status
            ),array(
                'signature'                         =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'signature_message'                 =>\Phalcon\Db\Column::TYPE_TEXT,
                'customer_account_number'           =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'msisdn'                            =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'operator_code'                     =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_plan_id'              =>\Phalcon\Db\Column::TYPE_DOUBLE,
                'initial_payment_product_id'        =>\Phalcon\Db\Column::TYPE_VARCHAR, 
                'initial_payment_date'              =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'execute_initial_payment_now'       =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'recurring_payment_product_id'      =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'product_catalog_name'              =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'execute_recurring_payment_now'     =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'contract_start_date'               =>\Phalcon\Db\Column::TYPE_VARCHAR, 
                'contract_end_date'                 =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'auto_renew_contract'               =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'language'                          =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'send_verification_sms'             =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'allow_multiple_free_start_periods' =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'header_enrichment_reference_code'  =>\Phalcon\Db\Column::TYPE_VARCHAR, 
                'smsid'                             =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'operation_status_code'             =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_contract_id'          =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'payment_transaction_status_code'   =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'transaction_id'                    =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'next_payment_date'                 =>\Phalcon\Db\Column::TYPE_VARCHAR, 
                'error_message'                     =>\Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_contract_status'      =>\Phalcon\Db\Column::TYPE_VARCHAR));
            return true;
        }catch(Exception $e){
            //save error
            return false;
        }
    }
}
