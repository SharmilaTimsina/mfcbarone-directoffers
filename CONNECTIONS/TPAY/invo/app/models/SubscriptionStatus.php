<?php

use Phalcon\Mvc\Model;
use Phalcon\Db\RawValue;

class SubscriptionStatus extends Model
{
    public $id;
    public $created_at;//string
    public $action;//string
    public $subscription_contract_id;//double
    public $customer_account_number;//string
    public $status;//string
    public $reason;//string
	public $user_hash_id;//string
	public $host;//string
    
    //public function beforeCreate(){$this->created_at = new RawValue('now()');}

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
            if((!empty($this->subscription_contract_id)) && (empty($this->user_hash_id)|| empty($this->host))){
                //if(empty($this->subscription_contract_id))
                //	throw new Exception('updHashHost: Without the necessary arguments:(subs_id ='.(empty($subs_id)?'null':$subs_id).')');

			
                $sql =  'SELECT * FROM subscription_status '.
						' WHERE subscription_contract_id = :subscription_contract_id and LOWER(status) like "new"'.
						' ORDER BY created_at DESC LIMIT 1';

                $statement = $this->getDi()->getDb()->prepare($sql);
                $exe = $this->getDi()->getDb()->executePrepared($statement,
					array('subscription_contract_id' => empty($this->subscription_contract_id) ? null : $this->subscription_contract_id),
                    array('subscription_contract_id' => \Phalcon\Db\Column::TYPE_DOUBLE));
			
			
                $last_field = $exe->fetchAll(PDO::FETCH_ASSOC);
                $last_field = $last_field[0];
				
                /*
                if(empty($last_field->user_hash_id) && empty($last_field->host)){
                        throw new Exception('selected field was empty at upHashHost with subs id '.$subs_id);
                }*/

                if(empty($this->user_hash_id)){					
                    $this->user_hash_id = empty($last_field['user_hash_id']) ? null : $last_field['user_hash_id'];
                }
                
                if(empty($this->host)){
					$this->host = empty($last_field['host']) ? null : $last_field['host'];
                }
            }
            $this->created_at = new RawValue('now()');
            $sql = 'INSERT INTO subscription_status(created_at,
                action,subscription_contract_id,customer_account_number,status,reason,user_hash_id,host)
            VALUES (NOW(),:action,:subscription_contract_id,:customer_account_number,:status,:reason,:user_hash_id,:host)';

            $statement = $this->getDi()->getDb()->prepare($sql);
            $exe = $this->getDi()->getDb()->executePrepared($statement, 
                array('action'                 =>$this->action,
                    'subscription_contract_id' =>empty((double)$this->subscription_contract_id) ? null : (double)$this->subscription_contract_id ,
                    'customer_account_number'  =>empty($this->customer_account_number) ? null : $this->customer_account_number,
                    'status'                   =>empty($this->status)       ? null : $this->status,
                    'reason'                   =>empty($this->reason)       ? null : $this->reason,
                    'user_hash_id'             =>empty($this->user_hash_id) ? null : $this->user_hash_id,
                    'host'                     =>empty($this->host)         ? null : $this->host),
                array(
                    'action'                    => \Phalcon\Db\Column::TYPE_VARCHAR,
                    'subscription_contract_id'  => \Phalcon\Db\Column::TYPE_DOUBLE,
                    'customer_account_number'   => \Phalcon\Db\Column::TYPE_VARCHAR,
                    'status'                    => \Phalcon\Db\Column::TYPE_VARCHAR,
                    'reason'                    => \Phalcon\Db\Column::TYPE_TEXT,
                    'user_hash_id'              => \Phalcon\Db\Column::TYPE_VARCHAR,
                    'host'                    	=> \Phalcon\Db\Column::TYPE_VARCHAR
                    ));
            
            return true;
        }catch(Exception $e){
            //save error
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|Exception:'.print_r($e,true).PHP_EOL,FILE_APPEND);
            return false;
        }
		catch (\PDOException $e) {
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|exe:'.print_r($e,true).PHP_EOL,FILE_APPEND);
            return false;
        }
    }
    
    public function selStatus($host,$user_hash_id=null,$msisdn=null,$operator_code=null){
        try{
            if(empty($host) && !(!empty($user_hash_id) || (!empty($msisdn) && !empty($operator_code)))){
                throw new Exception('selStatus: Without the necessary arguments:(host ='.empty($host)?'null':$host.'),(user_hash_id ='.empty($user_hash_id)?'null':$user_hash_id.'),(msisdn='.empty($msisdn)?'null':$msisdn.'),(operator_code='.empty($operator_code)?'null':$operator_code.')');
            }
            if(empty($user_hash_id)){
                $sql = '
                SELECT b.msisdn,b.operator_code,a.created_at,a.status,a.action,a.subscription_contract_id,a.customer_account_number,a.reason,a.user_hash_id,a.host
                FROM subscription_status as a
                INNER JOIN add_subscription_contract as b
                ON a.subscription_contract_id = b.subscription_contract_id 
                    and b.msisdn like :msisdn
                    and a.host like :host
                    and b.operator_code like :operator_code 
                    and (LOWER(a.Status) like "active"
                        or LOWER(a.Status) like "suspended"
                        or LOWER(a.Status) like "pendingoncallback")        
                ORDER BY a.created_at DESC LIMIT 1;';

                $statement = $this->getDi()->getDb()->prepare($sql);
                $exe = $this->getDi()->getDb()->executePrepared($statement, 
                    array('msisdn' => $msisdn,
                          'host' => $host,
                          'operator_code' => $operator_code
                    ),
                    array('msisdn'  => \Phalcon\Db\Column::TYPE_VARCHAR,
                        'host'  => \Phalcon\Db\Column::TYPE_VARCHAR,
                        'operator_code'  => \Phalcon\Db\Column::TYPE_VARCHAR));
            }else{
                $sql = 'SELECT *
                    FROM subscription_status
                    WHERE host like :host and user_hash_id like :user_hash_id and (LOWER(Status) like "active" or LOWER(Status) like "suspended" or LOWER(Status) like "pendingoncallback")
                    ORDER BY created_at DESC LIMIT 1';

                $statement = $this->getDi()->getDb()->prepare($sql);
                $exe = $this->getDi()->getDb()->executePrepared($statement,
                    array('host' => empty($host) ? null : $host,
                          'user_hash_id' => empty($user_hash_id) ? null : $user_hash_id
                    ),
                    array('host' => \Phalcon\Db\Column::TYPE_VARCHAR,
                        'user_hash_id' => \Phalcon\Db\Column::TYPE_VARCHAR));                
            }
            
            $result = $exe->fetchAll(PDO::FETCH_ASSOC);
            return $result;
		}catch(Exception $e){
			//save error
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|Exception:'.print_r($e,true).PHP_EOL,FILE_APPEND);
			return false;
		}
		catch (\PDOException $e) {
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|exe:'.print_r($e,true).PHP_EOL,FILE_APPEND);
			return false;
		}
    }

    public function updHashOnStatus($subscription_contract_id,$user_hash_id){
        try{
            if(empty((double)$subscription_contract_id) || empty($user_hash_id)){throw new Exception('Failed at assertion validation: updHashOnNewStatus(subscription_contract_id,$user_hash_id)');}

            $sql = 'UPDATE subscription_status
                    SET user_hash_id=:user_hash_id
                    WHERE subscription_contract_id=:subscription_contract_id and (LOWER(status) like "active" or LOWER(status) like "new")';

            $statement = $this->getDi()->getDb()->prepare($sql);
            $exe = $this->getDi()->getDb()->executePrepared($statement, 
                array('user_hash_id'             => $user_hash_id,
                      'subscription_contract_id' => empty((double)$subscription_contract_id) ? null : (double)$subscription_contract_id),
                array(
                    'user_hash_id'              => \Phalcon\Db\Column::TYPE_VARCHAR,
                    'subscription_contract_id'  => \Phalcon\Db\Column::TYPE_DOUBLE));
            
            //$response = $exe->fetchAll(PDO::FETCH_ASSOC);
            return $response;
        }catch(Exception $e){
            //save error
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|Exception:'.print_r($e,true).PHP_EOL,FILE_APPEND);
            return false;
        }
		catch (\PDOException $e) {
			file_put_contents('/var/www/html/invo/app/logs/push.log',date('H:i:s Y-m-d').'|exe:'.print_r($e,true).PHP_EOL,FILE_APPEND);
            return false;
        }
    }
}