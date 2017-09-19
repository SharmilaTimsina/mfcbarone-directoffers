<?php if (!defined('TPMOBZETA')) die('Access permission denied');

//require 'browser_detection.php';
//$teste = browser_detection('full_assoc');
//var_dump($teste);

$dt_func = DT_FUNC;
$date = $dt_func(DT_FORMAT);

$digest= PUBLIC_KEY.':'.hash_hmac(DIGEST_ECRIPT, $date.LANG.THEME,PRIVATE_KEY); 

$lang = array();
switch (LANG){
    case 'ar':
        $language = '2';
		if(file_exists(LANG_PATH.'/lang_arabic.ini')){
			$lang = parse_ini_file(LANG_PATH.'/lang_arabic.ini');
		}else{
			$lang = parse_ini_file(LANG_PATH.'/default.ini');
		}
        break;
    case 'en':
        $language = '1';
		if(file_exists(LANG_PATH.'/lang_english.ini')){
			$lang = parse_ini_file(LANG_PATH.'/lang_english.ini');
		}else{
			$lang = parse_ini_file(LANG_PATH.'/default.ini');
		}	
        break;
    case 'fr': 
		$language = '3';
		if(file_exists(LANG_PATH.'/lang_french.ini')){
			$lang = parse_ini_file(LANG_PATH.'/lang_french.ini');
		}else{
			$lang = parse_ini_file(LANG_PATH.'/default.ini');
		}
        break;
	default: 
		$language = '1';
		$lang = parse_ini_file(LANG_PATH.'/default.ini'); 
}
$html = '
<script src="http://lookup.tpay.me/idxml.ashx/js-staging?date='.$date.'&lang='.LANG.'&theme='.THEME.'&digest='.$digest.'"></script>
<script src="'.LINK_JS_FOLDER.'/es5-shim.min.js"></script>
<script src="'.LINK_JS_FOLDER.'/json2.js"></script>
<script src="'.LINK_JS_FOLDER.'/zeta.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
	window.onload = function(){
		this.zeta = new DOZeta(
			"'.PROD_SKU.'",
			"'.CATALOG.'",
			"'.SUBSCRIPTION_PLAN_ID.'",
			"'.$language.'",
			"'.CONTENTS_URL.'",
			"'.BASE_URL.'",
			"'.REQUEST_URI_ADD.'",
			"'.REQUEST_URI_VERIFY.'",
			"'.REQUEST_URI_CANCEL.'",
			"'.REQUEST_URI_VERIFY_CANCEL.'",
			"'.REQUEST_URI_RESEND.'",
			"'.REQUEST_ACCESS_SMS_LINK.'",
			"'.REQUEST_LOGIN.'",
			'.OPERATORS_CODE.',
			"'.BROKER.'",
			"'.REDIRECT_COUNTDOWN.'",
			"'.TEXT_CONTENT.'",
			'.json_encode($lang).');
		//<-- Start Execution -->
		this.zeta.initLP();
	};
</script>
<title>'.CATALOG.'</title>';
echo $html;
?>