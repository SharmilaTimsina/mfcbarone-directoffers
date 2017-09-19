<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class MTMessage extends Model
{
    public $id;
    public $created_at;
    public $set_from;
    public $subscription_contract_id;
    public $signature;
    public $message_body;
    public $msisdn;
    public $operator_code;
    public $message_delivery_status;
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
            $sql = 'INSERT INTO mt_message(created_at,set_from,subscription_contract_id,
                signature,message_body,msisdn,operator_code,message_delivery_status,error_message)
            VALUES (NOW(),:set_from,:subscription_contract_id,:signature,:message_body,:msisdn,:operator_code,:message_delivery_status,:error_message)';

        $statement = $this->getDi()->getDb()->prepare($sql);
        $exe = $this->getDi()->getDb()->executePrepared($statement, 
            array(                
                'signature'               =>$this->signature,
                'set_from'                =>$this->set_from,
                'subscription_contract_id'=>$this->subscription_contract_id,
                'message_body'            =>$this->message_body,
                'msisdn'                  =>$this->msisdn,
                'operator_code'           =>$this->operator_code,
                'message_delivery_status' =>$this->message_delivery_status,
                'error_message'           =>$this->error_message
                ),
            array(                
                'signature'               => \Phalcon\Db\Column::TYPE_VARCHAR,
                'set_from'                => \Phalcon\Db\Column::TYPE_VARCHAR,
                'subscription_contract_id'=> \Phalcon\Db\Column::TYPE_DOUBLE,
                'message_body'            => \Phalcon\Db\Column::TYPE_VARCHAR,
                'msisdn'                  => \Phalcon\Db\Column::TYPE_VARCHAR,
                'operator_code'           => \Phalcon\Db\Column::TYPE_VARCHAR,
                'message_delivery_status' => \Phalcon\Db\Column::TYPE_VARCHAR,
                'error_message'           => \Phalcon\Db\Column::TYPE_VARCHAR
            ));
            return true;
        }catch(Exception $e){
            //save error
            return false;
        }
    }
}
