<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author David Mendes
 */
class SoapTPay extends \Phalcon\DI\Injectable{
    public $client;
    public $log;
    public $url;
    public $func;
    public function __construct($url = null){
        try{
            $this->url = $url;
            $this->client = new SoapClient($url,
                array('features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                        'trace' => 1,
                        'exceptions' => 1,
                        'cache_wsdl' => WSDL_CACHE_NONE));

        }catch (SoapFault $e){
            $log = new BrokerRequestLog();
            $log->error = 1;
            $log->exception = $e->getCode().' - '.$e->getLine();
            $log->obs = $e->getMessage();
            $log->from = 'SoapTPay: __construct';
            $log->to =  $this->url;
            $log->broker = 'TPay';
            
            if ($log->save() == false){
                foreach ($log->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            }
        }
    }

    public function sendSoapRequest($params,$func){
        try{
            $log = new BrokerRequestLog();

            if(empty($params)){throw new Exception('Request Exception - Empty request', 6);}
            if(is_object($params)){
                $nameObject = get_class($params);
                $params = new SoapParam(new SoapVar($params, SOAP_ENC_OBJECT),$nameObject);
            }
            elseif(!is_array($params)){
                throw new Exception('Soap Request Exception - Unavailable object type', 6);
            }
            $result = $this->client->$func($params);
            $log->setParams(array('error'=>0,
                                  'request'=>$this->getLastRequest(),
                                  'response'=>$this->getLastResponse(),
                                  'from'=>$func,
                                  'to'=>$this->url,
                                  'broker'=>'TPay'));

            if ($log->save() == false) {
                
            }
            
            return $result;
        }catch(Exception $e){
            $log = new BrokerRequestLog();
            $log->error = 1;
            $log->exception = $e->getMessage();
            $log->from = 'SoapTPay: sendSoapRequest';
            $log->to =  $this->url;
            $log->broker = 'TPay';

            if ($log->save() == false){
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            }
            return false;
        }
    }

    public function getLastRequest(){
        if(!isset($this->client) || empty($this->client)){
            throw new Exception('Soap Request - No request made', 6);
        }
        return $this->client->__getLastRequest();
    }

    public function getLastResponse(){
        if(!isset($this->client) || empty($this->client)){
            throw new Exception('Soap Request - No request made', 6);
        }
        return $this->client->__getLastResponse();
    }
}
