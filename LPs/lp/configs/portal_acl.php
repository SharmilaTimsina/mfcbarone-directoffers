<?php
include '/var/www/html/invo/public/ext.php';
use Phalcon\Di;
use Phalcon\Http\Request;
use Phalcon\Filter;

$di = new Di();

// Using a string definition
$di->set("request", Request::class, true);

//setcookie ( $name , $value = "" ,$expire = 0 , $path = "" ,$domain = "" ,$secure = false ,$httponly = false)
// Create an instance via the service container
// Forward flow to another action
$portal_access= new PortalsaccessController();
//get landing pages link
$lp_link = 'http://zmobs.com/headerenrich.php';
$session_expire = 1800;
$auth_expire = 60*60*24*365;
$host = trim($_SERVER['HTTP_HOST']);
$host = trim(preg_replace('#^https?://#', '', $host),'/');
$host_dot = $host;
$host = str_replace('.','_',$host);

$filter 	= new Filter();
$request 	= new Request();
$zmuak 		= $filter->sanitize($request->get('zmuak'), 'string',null);
$sessionId 	= $filter->sanitize($request->get('sessionId'), 'string',null);
$msisdn 	= $filter->sanitize($request->get('msisdn'), 'string',null);
$operator 	= $filter->sanitize($request->get('operator'), 'string',null);

//Case HHE subscription 
if((empty($zmuak) || $zmuak=='undefined') && (!empty($sessionId) && !empty($msisdn) && !empty($operator))){

	$resp = $portal_access->verifyCustomerStatus($host_dot,null,$msisdn,$operator);
	if($resp == false){//customer needs to login or subscribe
		unset($_COOKIE[$host]['session']);
		setcookie($host.'[session]', 0,time()-1000, '/',$host_dot);
		unset($_COOKIE[$host]['zmuak']);
		setcookie($host.'[zmuak]', 0,time()-1000, '/',$host_dot);
		redirectToLogin($host,$lp_link);
    }
	setcookie($host.'[session]', (time() + $session_expire), (time() + $session_expire), '/',$host_dot);
    setcookie($host.'[zmuak]', $resp[0]['user_hash_id'], (time() + $auth_expire), '/',$host_dot);
	
}

if(empty($zmuak)){
	if(!empty($_COOKIE[$host]['zmuak'])){
		$zmuak   = $_COOKIE[$host]['zmuak'];
    }else{
        redirectToLogin($host,$lp_link);
    }
}

if(!empty($_COOKIE[$host]['session'])){
    $session = $_COOKIE[$host]['session'];    
}else{
    $session = 0;
}

if(!empty($zmuak)){
    if($session < (time() - $session_expire)){//Lost session verify
        $resp = $portal_access->verifyCustomerStatus($host_dot,$zmuak);
        if($resp == false){//customer needs to login or subscribe
            unset($_COOKIE[$host]['session']);
            setcookie($host.'[session]', 0,time()-1000, '/',$host_dot);
            unset($_COOKIE[$host]['zmuak']);
            setcookie($host.'[zmuak]', 0,time()-1000, '/',$host_dot);
			echo '<br><br>sessão menor';
            redirectToLogin($host,$lp_link);
        }
    }

    setcookie($host.'[session]', (time() + $session_expire), (time() + $session_expire), '/',$host_dot);
    setcookie($host.'[zmuak]', $zmuak, (time() + $auth_expire), '/',$host_dot);
}else{
    redirectToLogin($host,$lp_link);
}

function redirectToLogin($host,$lp_link){
    //No access key - redirect to login
    unset($_COOKIE[$host]['zmuak']);
    unset($_COOKIE[$host]['session']);
    setcookie($host.'[zmuak]', 0, time()-1000, '/',$host_dot);
    setcookie($host.'[session]', 0, time()-1000, '/',$host_dot);
	
    //redirect to landing
    header("Location: $lp_link");
    die();
}