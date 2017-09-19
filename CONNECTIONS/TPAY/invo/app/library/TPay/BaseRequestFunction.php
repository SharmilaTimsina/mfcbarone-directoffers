<?php
abstract class BaseRequestFunction{
    public function __construct($params = null){
        //$this->public_key = '8asv3sdEZq2a7kythkEd';
        //$this->private_key = 'faZhbsKTdupyag4pRB8n';
        
        $this->public_key = 'gGU58u2njocHrYMbJcKA';
        $this->private_key = '59wW4vviKrhSTEeumLDx';

        if(!empty($params))
            $this->mapParams($params);
    }

    public function getArray($parent_tag = null){
        if(empty($parent_tag)){return (array)$this;}

        return array($parent_tag=>$this);
    }

    public function echoFields(){
        $html = '<div><b>Fields:</b>';
        foreach($this as $key => $field){
            $html .= '<br><small><b>'.$key.':</b>'.$field.'</small>';
        }
        $html .= '<br></p>';
        echo $html;
    }

    public function getMessage(){
        $message = '';
        foreach((array)$this as $key => $value){
            if($key == 'ws_service_url' || $key == 'signature' || $key == 'public_key' || $key == 'private_key' || is_null($value)){continue;}
            if($value === false){
                $message .= 'false';
                continue;
            }
            $message .= $value;
        }
        return $message;
    }

    public function mapParams($params){
        if(empty($params) || !is_array($params)){throw new Exception('map parameters error', 6);}

        $params = array_change_key_case($params, CASE_LOWER);
        foreach((array)$this as $key => $value){
            if(!empty($params[strtolower($key)])){
                $this->$key = $params[strtolower($key)];
            }
        }
        if(property_exists($this,'signature')){$this->calcSignature();}
    }

    public function calcSignature(){
        if(empty($this->public_key) || empty($this->private_key)){throw new Exception('Security parameters error', 6);}

        $msg = $this->getMessage();

        if(empty($msg)){throw new Exception('Security parameters error', 6);}

        return $this->signature = $this->public_key.':'.hash_hmac('sha256', $msg, $this->private_key);
    }
}