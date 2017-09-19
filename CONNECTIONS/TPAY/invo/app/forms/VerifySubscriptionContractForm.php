<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class VerifySubscriptionContractForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        
        if (!isset($options['edit'])) {
            $element = new Text("id");
            $this->add($element->setLabel("Id"));
        } else {
            $this->add(new Hidden("id"));
        }
        
        $signature = new Text('Signature');
        $signature->setLabel('Signature');
        $signature->setFilters(array('striptags', 'string'));
        $this->add($signature);

        $subscription_contract_id = new Text('subscriptionContractId');
        $subscription_contract_id->setLabel('subscriptionContractId');
        $subscription_contract_id->setFilters(array('striptags', 'string'));
        $this->add($subscription_contract_id);
        
        $pin_code = new Text('pinCode');
        $pin_code->setLabel('pinCode');
        $pin_code->setFilters(array('striptags', 'string'));
        $this->add($pin_code);
        
        $operationStatusCode = new Text('operationStatusCode');
        $operationStatusCode->setLabel('operationStatusCode');
        $operationStatusCode->setFilters(array('striptags', 'string'));
        $this->add($operationStatusCode);
        
        $errorMessage = new Text('errorMessage');
        $errorMessage->setLabel('errorMessage');
        $errorMessage->setFilters(array('striptags', 'string'));
        $this->add($errorMessage);
    }
}