<!DOCTYPE html>
<html lang="ar">
	<head>
		<?php 	
			try{
				if (! @require_once( '/var/www/html/zmobs/lp/configs/lp2.php' )) throw new Exception ('This page is not available at the moment');
			}catch(Exception $e){
				echo '<h1>Opss</h1><h3>This page is not available at the moment</h3>';
				exit();
			}
			
		?>
		<title>MyAstro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- LP MAIN CSS -->
		<link rel="stylesheet" type="text/css" href="lp2/css/lp2_main.css">
		<!--
		<link rel="stylesheet" href="css/lp2.css">
		-->
	</head>
<body>

<div class="container">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12 lp-logo"></div><!--MYASTRO LOGO-->
		</div>
		<div class="row">
			<div class="thermo-heart"></div><!--HEART IMAGE-->
		</div>
		<div id='loader_zeta' class="loader_zeta text-center"></div><!--LOADING SPINNER-->
		<p id="error_msg" class='error_msg text-center col-xs-12 col-sm-12 col-md-12 col-lg-12'></p>
		<div id='main_content' style="display: none;">
			<div id='form_enriched' class="row">
				<button dir="rtl"  onclick="zeta.onSendAddSubs.call(zeta)" class="lp_horoscope_button">اِكتشف الآن</button><!--SUBSCRIBE BUTTON-->
			</div>

			<!--////////////////////////////////////////////////////////////////////////////////-->
			<div id="redirect_to_contents" class='white h-centered text-center container col-xs-12 col-sm-12 col-md-12 col-lg-12 h-centered'>
				<!--
				<div id="redirect_to_contents_msg black">
					...redirecting in <div id="redirect_countdown">5</div> seconds
				</div>
				-->
				<div class="clearfix"></div>
				<button style="margin-bottom: 10px;" class="btn btn-primary" onclick="zeta.goToContents.call(zeta,true)">Click here to redirect</button><div class="clearfix"></div>
				<p class="btn btn-primary" onclick="zeta.onSendAccessSMSLink.call(zeta,true)">Resend SMS with<br> subscription information</p>
			</div>
			<!--/////////////////////////////////////////////////////////////////////////////-->
			<div id="form_not_enriched" class="row">
				<p class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<select id="operators" class="network-input btn btn-secundary">
						<option value="false" selected disabled>Choose your network operator</option>
					</select>
				</p>
				<p class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input dir="rtl" placeholder="موبايل" class="form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="mobile_phone" name="mobile_phone" type="text"></input><br/>
				</p>
				<p dir="rtl" class="text-center horoscope">ابراج، ريادينغ</p>
				<p class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<button dir="rtl"  onclick="zeta.onSendAddSubs.call(zeta)" class="lp_horoscope_button">اِكتشف الآن</button><!--SUBSCRIBE BUTTON-->
					<button class="login-button btn">Login</button>
				</p>
			</div>

			<!--////////////////////////////////////////////////////////////////////////////-->
			<div id="form_pin_code_add" class="form-group form_pin_code_add container h-centered text-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<input dir="rtl" class="pin_code form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="pin_code" name="pin_code" maxlength="6" type="text" placeholder="رقم تاكيد الاشتراك"></input><br/>
				<input id="subscription_contract_id" name="subscription_contract_id" type="hidden"></input>
				<p class="h-centered">
					<button class="btn btn-primary" onclick="zeta.onSendVerifyPinCodeAdd.call(zeta)">اِكتشف الآن</button>
				</p>
				<p class="h-centered">
					<button class="btn btn-primary" onclick="zeta.onSendAskPinCodeAddResend.call(zeta)">Resend PIN code</button>
				</p>
			</div>
		</div>

		<!--LP CONDITIONS TEXT-->
		<div class="row">
			<div id="text_content" class="service-conditions col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<p dir="rtl"> مايأسترو:يجب على هاتفك أن يدعم خدمة(GPRS) أو واب (WAP) , سيتم احتساب 2 جنيه مصري باليوم ، لإلغاء الاشتراك أرسل كلمة UNSUB MA إلى 6699 لمستعملي فودافون ، UNSUB MA إلى 5030 لمستعملي أورانج أو UNSUB MA إلى 4565 بالنسبة لمستعملي إتصالات , للاستعلام أرسل مايل إلى <a dir="rtl" href="mailto:eg.support@zeta-mobile.com?Subject=Service%20Question" target="_top">دعم البريد الإلكتروني</a>
				</p>

				<p dir="rtl" class="service-conditions"><a href="lp2_terms.html"><b style="font-size: 4vw;" dir="rtl">الشروط و الأحكام</b></a></p>

			</div>
		</div>

	</div><!-- END COL-XS-12 -->
</div><!--END CONTAINER-->

		<!--FOOTER LP-->
		<footer class="fixed-footer text-center">
			<div class="col-xs-12">
				<small><span style="color: white;">Powered by </span><a style="color: #0081f9;" href="http://zeta-mobile.com" target="_blank">zeta-mobile.com</a></small>
			</div>
		</footer>

<script>
$("#mobile_phone").keydown(function (e) {
	numeric_values(e,171);
	return;
});
$("#pin_code").keydown(function (e) {
	numeric_values(e,null);
	return;
});
function numeric_values(e,key){
	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A,Ctrl+C,Ctrl+V, Command+A
      ((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67 || e.keyCode == 88) && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
	  
	  
		(e.keyCode >= 35 && e.keyCode <= 40 || ((key!=null) ? (e.keyCode == 171) : false))) {
			console.log("key:"+key);
			// let it happen, don't do anything
			return;
		}
	
	
	// Ensure that it is a number and stop the keypress
	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
	}
}
</script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 	crossorigin="anonymous"></script><!-- LATEST JQUERY -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!--BOOTSTRAP JQUERY-->


</body>
</html>
