<!DOCTYPE html>
<html>
	<header>
		<link rel="stylesheet" type="text/css" href="http://localhost/lp/css/main.css">
		<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
	</header>
	<body>
		<div class="header">
			<div class="logo"><a href="http://www.zeta-mobile.com"><img src="http://localhost/lp/images/logo.png" alt="Zeta-Mobile" /></a></div>
		</div>
		<head>		
			<?php
				$date=gmdate('Y-m-d H:i:s\Z');

				$lang='en';
				$theme='light';
				$public_key = 'gGU58u2njocHrYMbJcKA';
				$private_key = '59wW4vviKrhSTEeumLDx';
				$digest= $public_key.':'.hash_hmac ('sha256', $date.$lang.$theme,$private_key); 

				$simulate = true;
				$operatorcode = 'Mobinil-EGY';
				$msisdn = '201289464963';

				$js ='http://lookup.tpay.me/idxml.ashx/js-staging?date='.$date.'&lang='.$lang.'&theme='.$theme.'&digest='.$digest;/*.
				'&simulate=true'.
				'&operatorcode='.$operatorcode.
				'&msisdn='.$msisdn;  
				*/
				echo '<script src="'.$js.'"></script>'; 
			?>
		</head>
	dfdssdfsdf
		<?php
			echo $js;
		?>
	<script>
		if (window.TPay){
			alert("working");
		
			if (window.TPay.HeaderEnrichment.sessionId()){
				console.log("sessionId:"+JSON.stringify(window.TPay.HeaderEnrichment.sessionId(),null,4));
			}
			alert("enriched:"+window.TPay.HeaderEnrichment.enriched());
			alert("msisdn:"+window.TPay.HeaderEnrichment.msisdn());

			if (window.TPay.HeaderEnrichment.enriched()){//To detected if header was enriched
				console.log("enriched:"+JSON.stringify(window.TPay.HeaderEnrichment.enriched(),null,4)); 
			
				if (window.TPay && window.TPay.HeaderEnrichment && window.TPay.HeaderEnrichment.enriched()) { 
					window.TPay.HeaderEnrichment.hasSubscription("ZM1", function (hasSub, subId) { 
						
				   }); 
				   
					if (!hasSub) { 
						//user is not active subscriber, proceed with subscription 

						if (window.TPay.HeaderEnrichment.msisdn()){
							alert("msisdn:"+JSON.stringify(window.TPay.HeaderEnrichment.msisdn(),null,4));
							
							var msisdn = window.TPay.HeaderEnrichment.msisdn();
						}
						if (window.TPay.HeaderEnrichment.operatorCode()){
							var operatorCode = window.TPay.HeaderEnrichment.operatorCode();
							alert("operatorCode:"+JSON.stringify(window.TPay.HeaderEnrichment.operatorCode(),null,4));
						}
					}
					else { 
						alert("already subscribed, subscription contract id: " + subId); 
						//user is an active subscriber, proceed with login 

					}
				}
			}
		}

	function exeConfirm(){
			window.TPay.HeaderEnrichment.confirm(40481, 'Mobiplay', 'ZM1', function(result,subscriptionId){
				if (result == true) {
					alert("reference number is:" + subscriptionId); 
					addSubscriptionContractRequest(subscriptionId);
				}
				else 
					alert("error is:" + subscriptionId);						
			})

		//window.TPay.HeaderEnrichment.confirm(40481, 'Mobiplay', 'ZM1', callbackFunctionTPAY);
	}

	function addSubscriptionContractRequest(subscriptionId){
		//var http = new XMLHttpRequest();
		//var url = "http://35.177.38.73/teste/addsubscriptioncontractrequest";
		var url = "http://localhost/subsapp/testrequests/addsubscriptioncontractrequest";
		
		var customerAccountNumber = '1234567890';
		//var msisdn = window.TPay.HeaderEnrichment.msisdn();
		var msisdn = 'teste';
		//var operatorCode = window.TPay.HeaderEnrichment.operatorCode();
		var operatorCode = 'teste';
		var subscriptionPlanId =  40481;
		var initialPaymentproductId = 'ZM0.5';
		var initialPaymentDate = '2017-08-08 20:35:01Z';
		var executeInitialPaymentNow = false;
		var recurringPaymentproductId = 'ZM0.5';
		var productCatalogName = 'Mobiplay';
		var executeRecurringPaymentNow = false;
		var contractStartDate = '2017-08-08 20:30:01Z';
		var contractEndDate = '2017-09-08 20:35:01Z';
		var autoRenewContract = true;
		var language = 'Arabic';
		var sendVerificationSMS = true;
		var allowMultipleFreeStartPeriods = false;
		var headerEnrichmentReferenceCode = null;
		var smsId = null;

		var params = {"customerAccountNumber": customerAccountNumber,
						"msisdn": msisdn,
						"operatorCode": operatorCode,
						"subscriptionPlanId": subscriptionPlanId,
						"initialPaymentproductId": initialPaymentproductId,
						"initialPaymentDate": initialPaymentDate,
						"executeInitialPaymentNow": executeInitialPaymentNow,
						"recurringPaymentproductId": recurringPaymentproductId,
						"productCatalogName": productCatalogName,
						"executeRecurringPaymentNow": executeRecurringPaymentNow,
						"contractStartDate": contractStartDate,
						"contractEndDate": contractEndDate,
						"autoRenewContract": autoRenewContract,
						"language": language,
						"sendVerificationSMS": sendVerificationSMS,
						"allowMultipleFreeStartPeriods": allowMultipleFreeStartPeriods,
						"headerEnrichmentReferenceCode": headerEnrichmentReferenceCode,
						"smsId": smsId
					};

		$.ajax({
			url: url
			,data: params
			,type: 'POST'
			,crossDomain: true
			//,dataType: 'jsonp'
			
			/*,beforeSend: function(xhr) {
					xhr.setRequestHeader('Authorization', token);
			}*/
		}).done(function(data) { 
			console.log("done:"+data);
			document.getElementById("result").innerHTML = data; 
		}).fail(function(data) { 
				console.log("Failed:"+JSON.stringify(data,null,4));
		}).always(function(data){
				console.log("always:"+JSON.stringify(data,null,4));
		});
	}

	</script>
	<div>

<button onclick="exeConfirm()">Subscribe Now!</button>


The service costs: for Vodafone subscribers - EGP 2/day;
for Orange subscribers - EGP 2/day.
In case you don't have enough credit, it's possible to collect 
the subscription amount retroactively.

To stop the Subscription by sending SMS, 
it is required for: Orange Subscribers to send an SMS with the
text "STOP sn  " to the free number 6699.

Data charges would apply for browsing and
downloading contents on this portal.
To make use of this service, one must be more than 
18 years old or have received permission from your
parents or person who is authorized to pay your mobile bill.
Send email if you have any queries: Support Email

<div>
Terms and Conditions



Cancel Subscription

	
	
	
	
	
	
	
	
	<!--
	
	<br/>
	<button onclick="exeConfirm()">Subscribe TPAY process</button>
	<br/>
	<button onclick="addSubscriptionContractRequest('234f3423')">Subscribe ajax test</button>
	<div>
		Lorem ipsum dolor sit amet, 
		consectetur adipiscing elit, 
		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	</div>
	<br>
	<a href=''>terms and conditions</a>
	<br>
	<a href=''>cancel subscription</a>
	<br>
	
	-->
-----------------------------------------------------------------------------------------------------	
	<br>
-----------------------------------------------------------------------------------------------------
<br><br/>	
<div id="result"></div>	
<br/>	

<?php 

/*
echo 'iniciar pedido'; 
echo '<div class="col-lg-12"><b><span>AddSubscriptionContractRequest:</span></b><div/>';

$web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

$data = new AddSubscriptionContractRequest();
$req = new sendSoapRequest($web_serv_add);
$result = $req->sendSoapRequest($data->getArray(),'AddSubscriptionContractRequest'); 

$message  = $data->getMessage();
$request  = $req->getLastRequest();
$response = $req->getLastResponse();

printResult($request,$result,$response,$message);   
		
		
class sendSoapRequest{
    public $client;
    public function __construct($url = null){
        //if(empty($url)){
            //getUrl
        //}
	
        $this->client = new SoapClient($url,
            array('features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                    'trace' => 1,
                    'exceptions' => 1,
                    'cache_wsdl' => WSDL_CACHE_NONE));
    }

    public function sendSoapRequest($params,$func){
        if(empty($params)){
            throw new Exception('Request Exception - Empty object', 6);
        }
        if(is_object($params)){
            $nameObject = get_class($params);
            $params = new SoapParam(new SoapVar($params, SOAP_ENC_OBJECT),$nameObject);
        }
        elseif(!is_array($params)){
            throw new Exception('Request Exception - Unavailable object type', 6);
        }

        $result = $this->client->$func($params);

        return $result;
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
    public function getLastRequestHeaders(){
        if(!isset($this->client) || empty($this->client)){
            throw new Exception('Soap Request - No request made', 6);
        }
        return $this->client->__getLastRequestHeaders();
    }
}
function printResult($request=null,$result = null,$response=null,$message = null,$header = null){
    echo 
    '<div class="col-lg-12">'
    . ' App Request<br/>'
	. ' HEADER:<br/><pre><code><small>'.htmlentities($header).'</small></code></pre>'
    . ' MESSAGE:<br/><pre><code><small>'.htmlentities($message).'</small></code></pre>'
    . ' <br/>REQUEST:<br/><pre><code><small>'.htmlentities($request).'</small></code></pre>'
    . ' <br/>RESPONSE:<br/><pre><code><small>'.htmlentities($response).'</small></code></pre></div>'
    . ' <br/>RESULT:<br/><pre><code><small>'.print_r($result,true).'</small></code></pre>'
    . '</div>'
    . '<div class="clearfix">&nbsp</div>';
}
class AddSubscriptionContractRequest{
    public $signature;                      //Mandatory - string
    public $customerAccountNumber;          //Mandatory - string
    public $msisdn;                         //Mandatory - string
    public $operatorCode;                   //Mandatory - string
    public $subscriptionPlanId;             //Mandatory - long
    public $initialPaymentproductId;        //Mandatory - string
    public $initialPaymentDate;             //Mandatory - string
    public $executeInitialPaymentNow;       //Mandatory - bool 
    public $recurringPaymentproductId;      //Mandatory - string
    public $productCatalogName;             //Mandatory - string
    public $executeRecurringPaymentNow;     //Mandatory - bool 
    public $contractStartDate;              //Mandatory - string
    public $contractEndDate;                //Mandatory - string
    public $autoRenewContract;              //Mandatory - bool 
    public $language;                       //Mandatory - MerchantLanguage = {Auto = 0, English = 1, Arabic = 2, French = 3}
    public $sendVerificationSMS;            //bool
    public $allowMultipleFreeStartPeriods;  //bool
    public $headerEnrichmentReferenceCode;  //string
    public $smsId;                          //string
    
    public function __construct($customerAccountNumber='testcustomer',$msisdn= '201069409370',$operatorCode= 'Mobinil-EGY',$subscriptionPlanId = 40481,$initialPaymentproductId= "Puzzle_game",$initialPaymentDate= "2017-06-21 16:18:42Z",$executeInitialPaymentNow = false,$recurringPaymentproductId = "Puzzle_game",$productCatalogName = "GamesZone",$executeRecurringPaymentNow = false,$contractStartDate = "2017-07-26 10:56:13Z",$contractEndDate = "2017-07-26 10:56:13Z",$autoRenewContract = true,$language = 'Auto',$sendVerificationSMS = true,$allowMultipleFreeStartPeriods= false,$headerEnrichmentReferenceCode = '',$smsId = '') {


        $customerAccountNumber = '12345678';
		$msisdn = '201069936641';
		$operatorCode = 'Vodafone-EGY';
		$subscriptionPlanId =  '40481';
		$initialPaymentproductId = 'ZM0.5';
		$initialPaymentDate = '2017-08-04 20:35:01Z';
		$executeInitialPaymentNow = false;
		$recurringPaymentproductId = 'ZM0.5';
		$productCatalogName = 'Mobiplay';
		$executeRecurringPaymentNow = false;
		$contractStartDate = '2017-08-04 20:30:01Z';
		$contractEndDate = '2017-09-04 20:35:01Z';
		$autoRenewContract = true;
		$language = 'Auto';
		$sendVerificationSMS = true;
		$allowMultipleFreeStartPeriods = false;
		$headerEnrichmentReferenceCode = null;
		$smsId = null;

        $this->customerAccountNumber = $customerAccountNumber;
        $this->msisdn = $msisdn;
        $this->operatorCode = $operatorCode;
        $this->subscriptionPlanId = $subscriptionPlanId;
        $this->initialPaymentproductId = $initialPaymentproductId;
        $this->initialPaymentDate = $initialPaymentDate;
        $this->executeInitialPaymentNow = $executeInitialPaymentNow;
        $this->recurringPaymentproductId = $recurringPaymentproductId;
        $this->productCatalogName = $productCatalogName;
        $this->executeRecurringPaymentNow = $executeRecurringPaymentNow;
        $this->contractStartDate = $contractStartDate;
        $this->contractEndDate = $contractEndDate;
        $this->autoRenewContract = $autoRenewContract;
        $this->language = $language;
        $this->sendVerificationSMS = $sendVerificationSMS;
        $this->allowMultipleFreeStartPeriods = $allowMultipleFreeStartPeriods;
        $this->headerEnrichmentReferenceCode = $headerEnrichmentReferenceCode;
        $this->smsId = $smsId;

        $public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);	
    }
    public function echoFields(){
        $html .= '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>customerAccountNumber:</b>'. $this->customerAccountNumber;
        $html .= '<br><b>msisdn:</b>'. $this->msisdn;
        $html .= '<br><b>operatorCode:</b>'. $this->operatorCode;
        $html .= '<br><b>subscriptionPlanId:</b>'. $this->subscriptionPlanId;
        $html .= '<br><b>initialPaymentproductId:</b>'. $this->initialPaymentproductId;
        $html .= '<br><b>initialPaymentDate:</b>'. $this->initialPaymentDate;
        $html .= '<br><b>executeInitialPaymentNow:</b>'. ($this->executeInitialPaymentNow == true ? 'true' : 'false');
        $html .= '<br><b>recurringPaymentproductId:</b>'. $this->recurringPaymentproductId;
        $html .= '<br><b>productCatalogName:</b>'. $this->productCatalogName;
        $html .= '<br><b>executeRecurringPaymentNow:</b>'. ($this->executeRecurringPaymentNow == true ? 'true' : 'false');
        $html .= '<br><b>contractStartDate:</b>'. $this->contractStartDate;
        $html .= '<br><b>contractEndDate:</b>'. $this->contractEndDate;
        $html .= '<br><b>autoRenewContract:</b>'. ($this->autoRenewContract == true ? 'true' : 'false');
        $html .= '<br><b>language:</b>'. $this->language;
        $html .= '<br><b>sendVerificationSMS:</b>'. ($this->sendVerificationSMS == true ? 'true' : 'false');
        $html .= '<br><b>allowMultipleFreeStartPeriods:</b>'. ($this->allowMultipleFreeStartPeriods ? 'true' : 'false');
        $html .= '<br><b>headerEnrichmentReferenceCode:</b>'. $this->headerEnrichmentReferenceCode;
        $html .= '<br><b>smsId:</b>'. $this->smsId;
        $html .= '<br><br>...............................................<br><br>';
        echo $html;
    }
    public function getMessage(){
        switch ($this->language) {
            case 'Auto':    $lang_msg = 0;break;
            case 'English': $lang_msg = 1;break;
            case 'Arabic':  $lang_msg = 2;break;
            case 'French':  $lang_msg = 3;break;
            default:        $lang_msg = 0;break;
        }
        
        $message = $this->customerAccountNumber;
        $message .=$this->msisdn;
        $message .=$this->operatorCode;
        $message .=$this->subscriptionPlanId;
        $message .=$this->initialPaymentproductId;
        $message .=$this->initialPaymentDate;
        $message .=$this->executeInitialPaymentNow == true ? 'true' : 'false';
        $message .=$this->recurringPaymentproductId;
        $message .=$this->productCatalogName;
        $message .=$this->executeRecurringPaymentNow == true ? 'true' : 'false';
        $message .=$this->contractStartDate;
        $message .=$this->contractEndDate;
        $message .=$this->autoRenewContract == true ? 'true' : 'false';
        $message .=$lang_msg;
        $message .=($this->sendVerificationSMS == true) ? 'true' : 'false';
        $message .=$this->allowMultipleFreeStartPeriods ? 'true' : 'false';
        $message .=$this->headerEnrichmentReferenceCode;
        $message .=$this->smsId;
        return $message;
    }
    public function getArray(){return array('request'=>$this);}
}



echo '<b><span>SuspendSubscriptionContractRequest: Example developers.tpay.me</span></b>';

$web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

$data = new SuspendSubscriptionContractRequest();
$req = new sendSoapRequest($web_serv_add);
$result = $req->sendSoapRequest($data->getArray(),'SuspendSubscriptionContractRequest');



echo $data->echoFields();

$header = $req->getLastRequestHeaders();
$message  = $data->getMessage();
$request  = $req->getLastRequest();
$response = $req->getLastResponse();
printResult($request,$result,$response,$message,$header);

class SuspendSubscriptionContractRequest{
    public $signature;
    public $subscriptionContractId;

    public function __construct($subscriptionContractId="351805"){
            $public_key = 'gGU58u2njocHrYMbJcKA';
            $private_key = '59wW4vviKrhSTEeumLDx';
            $this->subscriptionContractId = $subscriptionContractId;
            $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
    }
	

    public function getArray(){return (array)$this;}
    public function echoFields(){
        $html = '<br><br>...............................................<br><br>';
        $html .= '<b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        echo $html;
    }
    public function getMessage(){
        $message  =$this->subscriptionContractId;
        return $message;
    }
}

echo '<b><span>CancelSubscriptionContractRequest: Example developers.tpay.me</span></b>';
$web_serv_add = 'http://staging.tpay.me/api/TPaySubscription.svc?wsdl';

$data = new CancelSubscriptionContractRequest();
$req = new sendSoapRequest($web_serv_add);
//$result = $req->sendSoapRequest($data,'CancelSubscriptionContractRequest');
$result = $req->sendSoapRequest($data->getArray(),'CancelSubscriptionContractRequest');


$message  = $data->getMessage();
$request  = $req->getLastRequest();
$response = $req->getLastResponse();

printResult($request,$result,$response,$message);

class CancelSubscriptionContractRequest{
    public $subscriptionContractId;
    public $cancellationProductCatalogName;
    public $cancellationProductId;
    public $cancellationDate;
    public $customerAccountNumber;

    public function __construct($subscriptionContractId="111234",$cancellationProductCatalogName = '11132',$cancellationProductId = '11132',$cancellationDate = '2017-08-02 10:42:00z',$customerAccountNumber = null){
		
		$subscriptionContractId="351805";
		$cancellationProductCatalogName = 'Mobiplay';
		$cancellationProductId = 'ZM1';
		$cancellationDate = '2017-08-02 16:21:00z';
		$customerAccountNumber = '123mobs123';

		$public_key = 'gGU58u2njocHrYMbJcKA';
        $private_key = '59wW4vviKrhSTEeumLDx';
        $this->subscriptionContractId = strtolower((string)$subscriptionContractId);
        $this->cancellationProductCatalogName = strtolower((string)$cancellationProductCatalogName);
        $this->cancellationProductId = strtolower((string)$cancellationProductId);
        $this->cancellationDate = strtolower((string)$cancellationDate);
        if($customerAccountNumber !== null || $customerAccountNumber !== 'null'){
            $this->customerAccountNumber = strtolower((string)$customerAccountNumber);
        }else{
            $this->customerAccountNumber = null;
        }
        $this->customerAccountNumber = $customerAccountNumber;

        $this->signature = $public_key.':'.hash_hmac('sha256', $this->getMessage(), $private_key);
        
        if($this->customerAccountNumber === null){
            $this->customerAccountNumber = 'null';
        }
    }

    public function getArray(){return array('request'=>$this);}

    public function echoFields(){
        $html = '<br><br>...............................................<br><br><b>Campos:</b><br><br>';
        $html .= '<br><b>subscriptionContractId:</b>'.$this->subscriptionContractId;
        $html .= '<br><b>cancellationProductCatalogName:</b>'.$this->cancellationProductCatalogName;
        $html .= '<br><b>cancellationProductId:</b>'.$this->cancellationProductId;
        $html .= '<br><b>cancellationDate:</b>'.$this->cancellationDate;
        $html .= '<br><b>customerAccountNumber:</b>'.$this->customerAccountNumber;
        $html .= '<br><b>signature:</b>'.$this->signature;
        echo $html;
    }

    public function getMessage(){
        $message = $this->subscriptionContractId;
        $message .= $this->cancellationProductCatalogName;
        $message .= $this->cancellationProductId;
        $message .= $this->cancellationDate;
        $message .= empty($this->customerAccountNumber) || $this->customerAccountNumber === 'null' ? '' : $this->customerAccountNumber ;
        return $message;
    }
}

*/
?>	

</body>
</html>

