<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class BrokerRequestLog extends Model
{
    public $id;
    public $created_at;
    public $error;
    public $obs;
    public $exception;
    public $request;
    public $response;
    public $from;
    public $to;
    public $broker;
	public $message;

    public function beforeCreate(){$this->created_at = new RawValue('now()');}

    public function setParams($params)
    {
        foreach($params as $key => $value){
            if($this->propertyExists($key,$params)){
                $this->$key = $value;
            }
        }
    }
    public function propertyExists($property,$params) { return property_exists($this, $property) || isset($params[$property]);}
}
