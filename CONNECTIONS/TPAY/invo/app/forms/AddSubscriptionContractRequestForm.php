<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class AddSubscriptionContractRequestForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        
        if (!isset($options['edit'])) {
            $element = new Text("id");
            $this->add($element->setLabel("Id"));
        } else {
            $this->add(new Hidden("id"));
        }
        
        $signature = new Text('signature');
        $signature->setLabel('signature');
        $signature->setFilters(array('striptags', 'string'));
        $this->add($signature);

        $customer_account_number = new Text('customerAccountNumber');
        $customer_account_number->setLabel('customerAccountNumber');
        $customer_account_number->setFilters(array('striptags', 'string'));
        $this->add($customer_account_number);
        
        $msisdn = new Text('msisdn');
        $msisdn->setLabel('msisdn');
        $msisdn->setFilters(array('striptags', 'string'));
        $this->add($msisdn);
        
        $operator_code = new Text('operatorCode');
        $operator_code->setLabel('operatorCode');
        $operator_code->setFilters(array('striptags', 'string'));
        $this->add($operator_code);
        
        $subscription_plan_id = new Text('subscriptionPlanId');
        $subscription_plan_id->setLabel('subscriptionPlanId');
        $subscription_plan_id->setFilters(array('striptags', 'string'));
        $this->add($subscription_plan_id);
    
        $initial_payment_product_id = new Text('initialPaymentproductId');
        $initial_payment_product_id->setLabel('initialPaymentproductId');
        $initial_payment_product_id->setFilters(array('striptags', 'string'));
        $this->add($initial_payment_product_id);
        
        $initial_payment_date = new Text('initialPaymentDate');
        $initial_payment_date->setLabel('initialPaymentDate');
        $initial_payment_date->setFilters(array('striptags', 'string'));
        $this->add($initial_payment_date);
        
        $execute_initial_payment_now = new Text('executeInitialPaymentNow');
        $execute_initial_payment_now->setLabel('executeInitialPaymentNow');
        $execute_initial_payment_now->setFilters(array('striptags', 'string'));
        $this->add($execute_initial_payment_now);
        
        $recurring_payment_product_id = new Text('recurringPaymentproductId');
        $recurring_payment_product_id->setLabel('recurringPaymentproductId');
        $recurring_payment_product_id->setFilters(array('striptags', 'string'));
        $this->add($recurring_payment_product_id);
        
        $product_catalog_name = new Text('productCatalogName');
        $product_catalog_name->setLabel('productCatalogName');
        $product_catalog_name->setFilters(array('striptags', 'string'));
        $this->add($product_catalog_name);
        
        $execute_recurring_payment_now = new Text('executeRecurringPaymentNow');
        $execute_recurring_payment_now->setLabel('executeRecurringPaymentNow');
        $execute_recurring_payment_now->setFilters(array('striptags', 'string'));
        $this->add($execute_recurring_payment_now);
        
        $contract_start_date = new Text('contractStartDate');
        $contract_start_date->setLabel('contractStartDate');
        $contract_start_date->setFilters(array('striptags', 'string'));
        $this->add($contract_start_date);
        
        $contract_end_date = new Text('contractEndDate');
        $contract_end_date->setLabel('contractEndDate');
        $contract_end_date->setFilters(array('striptags', 'string'));
        $this->add($contract_end_date);
        
        $auto_renew_contract = new Text('autoRenewContract');
        $auto_renew_contract->setLabel('autoRenewContract');
        $auto_renew_contract->setFilters(array('striptags', 'string'));
        $this->add($auto_renew_contract);
        
        $language = new Text('Language');
        $language->setLabel('Language');
        $language->setFilters(array('striptags', 'string'));
        $this->add($language);
        
        $send_verification_sms = new Text('sendVerificationSMS');
        $send_verification_sms->setLabel('sendVerificationSMS');
        $send_verification_sms->setFilters(array('striptags', 'string'));
        $this->add($send_verification_sms);
        
        $allow_multiple_free_start_periods = new Text('allowMultipleFreeStartPeriods');
        $allow_multiple_free_start_periods->setLabel('allowMultipleFreeStartPeriods');
        $allow_multiple_free_start_periods->setFilters(array('striptags', 'string'));
        $this->add($allow_multiple_free_start_periods);
        
        $header_enrichment_reference_code = new Text('headerEnrichmentReferenceCode');
        $header_enrichment_reference_code->setLabel('headerEnrichmentReferenceCode');
        $header_enrichment_reference_code->setFilters(array('striptags', 'string'));
        $this->add($header_enrichment_reference_code);
        
        $sms_id = new Text('smsId');
        $sms_id->setLabel('smsId');
        $sms_id->setFilters(array('striptags', 'string'));
        $this->add($sms_id);
        
        $operation_status_code = new Text('operationStatusCode');
        $operation_status_code->setLabel('operationStatusCode');
        $operation_status_code->setFilters(array('striptags', 'string'));
        $this->add($operation_status_code);
    }
}
 
 






 