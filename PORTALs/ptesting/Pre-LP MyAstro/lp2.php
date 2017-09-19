<?php
define('TPMOBZETA',true);
define('ROOT_PATH','/var/www/html/zmobs/lp');
define('LANG','en');
define('THEME','light');
//define('PUBLIC_KEY','8asv3sdEZq2a7kythkEd');
//define('PRIVATE_KEY','faZhbsKTdupyag4pRB8n');
//define('PROD_SKU','MA2');
//define('CATALOG','MyAstro');
//define('SUBSCRIPTION_PLAN_ID','60494');

define('PUBLIC_KEY','gGU58u2njocHrYMbJcKA');
define('PRIVATE_KEY','59wW4vviKrhSTEeumLDx');
define('PROD_SKU','ZM2');
//define('CATALOG','Mobiplay');
//define('SUBSCRIPTION_PLAN_ID','40481');
define('CATALOG','MyAstro');
define('SUBSCRIPTION_PLAN_ID','60522');

define('BROKER','TPAY');
define('DT_FORMAT','Y-m-d H:i:s\Z');
define('DT_FUNC','gmdate');
define('DIGEST_ECRIPT','sha256');
define('DIGEST_ENCRIPT_FUNC','hash_hmac');
define('LINK_JS_FOLDER','http://zmobs.com/ptesting/Pre-LP MyAstro/js');
define('LINK_CSS_FOLDER','http://zmobs.com/ptesting/Pre-LP MyAstro/css');

define('CONTENTS_URL','http://myastro.eg.zmobs.com');
define('BASE_URL','http://35.177.38.73/');
define('REQUEST_URI_ADD','addsubscriptioncontractrequest/run');
define('REQUEST_URI_VERIFY','verifysubscriptioncontract/run');
define('REQUEST_URI_RESEND','sendsubscriptioncontractverificationsms/run');
define('REQUEST_URI_CANCEL','cancelsubscriptioncontractrequest/run');
define('REQUEST_URI_VERIFY_CANCEL','sendsubscriptioncancellationpinsms/run');

define('TEXT_CONTENT','<p>The service costs: for Vodafone subscribers - EGP 2/day; for Orange subscribers - EGP 2/day. In case you don\'t have enough credit, it\'s possible to collect the subscription amount retroactively.</p><p>To stop the Subscription by sending SMS, it is required for: Orange subscribers to send an SMS with the text \"STOP SN\" to the free number 5030; Vodafone Subscribers to send an SMS with the text \"STOP SN \" to the free number 6699.</p><p>Data charges would apply for browsing and downloading contents on this portal. To make use of this service, one must be more than 18 years old or have received permission from your parents or person who is authorized to pay your mobile bill. Send email if you have any questions: <a href=\"mailto:support@zeta-mobile.com?Subject=Service%20Question\" target=\"_top\">Support Email</a></p>');

define('REDIRECT_COUNTDOWN',1000);

define('OPERATORS_CODE',json_encode(array('Mobinil-EGY'=>'60201',
										  'Vodafone-EGY'=>'60202',
										  'Etisalat-EGY'=>'60203')));

try{
	if (!@include_once( ROOT_PATH.'/configs/ini_tpay.php' ))
		throw new Exception ('file does not exist');
}catch(Exception $e){
	echo '<h1>Opss</h1><h3>This page is not available at the moment</h3>';
	exit();
}
?>