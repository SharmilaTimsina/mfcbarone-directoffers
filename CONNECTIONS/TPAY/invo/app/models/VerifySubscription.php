<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class VerifySubscription extends Model
{
    public $id;
    public $created_at;
    public $signature;//string - Mandatory
    public $subscription_contract_id;//long - Mandatory
    public $pin_code;//string - Mandatory
    public $operation_status_code;
    public $error_message;

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
            $this->created_at = new RawValue('now()');
            $sql = 'INSERT INTO verify_subscription(created_at,
                signature,subscription_contract_id,pin_code,operation_status_code,error_message,msisdn,operator_code)
            VALUES (NOW(),:signature,:subscription_contract_id,:pin_code,:operation_status_code,:error_message,:msisdn,:operator_code)';

        $statement = $this->getDi()->getDb()->prepare($sql);
        $exe = $this->getDi()->getDb()->executePrepared($statement, 
            array('signature'              =>$this->signature,
                'subscription_contract_id' =>$this->subscription_contract_id,
                'pin_code'                 =>$this->pin_code,
                'operation_status_code'    =>$this->operation_status_code,
                'error_message'            =>$this->error_message,
                'msisdn'                   =>$this->msisdn,
                'operator_code'            =>$this->operator_code
                ),
            array(
                'signature'                => \Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_contract_id' => \Phalcon\Db\Column::TYPE_DOUBLE,
                'pin_code'                 => \Phalcon\Db\Column::TYPE_VARCHAR,
                'operation_status_code'    => \Phalcon\Db\Column::TYPE_VARCHAR,
                'error_message'            => \Phalcon\Db\Column::TYPE_VARCHAR,
                'msisdn'                   => \Phalcon\Db\Column::TYPE_VARCHAR,
                'operator_code'            => \Phalcon\Db\Column::TYPE_VARCHAR
            ));
            return true;
        }catch(Exception $e){
            //save error
            return false;
        }
    }
	
}