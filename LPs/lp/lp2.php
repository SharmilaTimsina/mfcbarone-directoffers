<!DOCTYPE html>
<html>
	<header>
	<?php 	
		try{
			if (! @require_once( 'C:/Apache24/htdocs/Lp/configs/lp2.php' )) throw new Exception ('This page is not available at the moment');
		}catch(Exception $e){
			echo '<h1>Opss</h1><h3>This page is not available at the moment</h3>';
			exit();
		}
	?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="http://localhost/lp/images/favicon.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="http://localhost/lp/css/lp2.css">
	</header>
	<body>
		<div class="universe">
			<div class='container col-xs-3 col-sm-3 col-md-2 col-lg-2 h-centered'>
				<img class="logo h-centered" src="http://zmobs.com/lp/images/logo.png"/>
			</div>
			<div id='spinner' class="spinner h-centered txt-center white"></div>
			<div id='main_content' style="display:none;">
				<div class="clearfix"></div>
				<div id="error_msg" class='error_msg h-centered txt-center container col-xs-12 col-sm-12 col-md-12 col-lg-12 h-centered'></div>
				
				<div class="clearfix"></div>
				<div id="redirect_to_contents" class='white h-centered txt-center container col-xs-12 col-sm-12 col-md-12 col-lg-12 h-centered'>
					<div id="redirect_to_contents_msg">
						...redirecting in <div id="redirect_countdown">5</div> seconds
					</div>
					<div class="clearfix"></div>
					<button class="btn btn-primary" onclick="zeta.goToContents.call(zeta,true)">Click here to redirect</button>
				</div>
				<div class="clearfix"></div>

				<div id='form_enriched' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					Exotic content that will enable you to have a more fulfilling life.<div class="clearfix"></div>
					<button class="btn btn-primary" onclick="zeta.onSendAddSubs.call(zeta)">Subscribe Now!</button>
				</div>

				<div id="form_not_enriched" class="form-group dropdown form_mob_s_header_enrich container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p id='not_enriched_subs_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-primary" onclick="zeta.onSendAddSubs.call(zeta)">Subscribe Now!</button>
					</p>
					<p id='not_enriched_subs_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<select id="operators" class="btn btn-secundary">
							<option value="false" selected disabled>Choose your network operator</option>
						</select>
					</p>
					<p id='not_enriched_subs_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="clearfix"></div>
						<input placeholder="Enter your mobile phone number" class="form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="mobile_phone" name="mobile_phone" type="text"></input><br/>
					</p>
				</div>

				<div id="form_pin_code_add" class="form-group form_pin_code_add container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					A SMS was sent to your phone with a pin code, please insert it here to confirm subscription<br/>
					<input class="form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="pin_code" name="pin_code" type="text"></input><br/>
					<input id="subscription_contract_id" name="subscription_contract_id" type="hidden"></input>
					<p class="h-centered">
						<button class="btn btn-primary" onclick="zeta.onSendVerifyPinCodeAdd.call(zeta)">Send!</button>
					</p>
					<p class="h-centered">
						<button class="btn btn-primary" onclick="zeta.onSendAskPinCodeAddResend.call(zeta)">Resend</button>
					</p>
				</div>
				<div id="form_cancel" class="form-group dropdown form_mob_s_header_enrich container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p id='form_cancel_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-primary" onclick="zeta.onSendAskPinCodeCancel.call(zeta)">Cancel Subscription</button>
					</p>
					<p id='form_cancel_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<select id="operators_cancel" class="btn btn-secundary">
							<option value="false" selected disabled>Choose your network operator</option>
						</select>
					</p>
					<p id='form_cancel_button' class="container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="clearfix"></div>
						<input placeholder="Enter your mobile phone number" class="form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="mobile_phone_cancel" name="mobile_phone" type="text"></input><br/>
					</p>
				</div>
				<div id="form_pin_code_cancel" class="form-group form_pin_code_add container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					A SMS was sent to your phone with a pin code, please insert it here to confirm service cancellation<br/>
					<input class="form-control h-centered col-xs-8 col-sm-8 col-md-4 col-lg-4" id="pin_code" name="pin_code" type="text"></input><br/>
					<p class="h-centered">
						<button class="btn btn-primary" onclick="zeta.onSendVerifyPinCodeCancel.call(zeta)">Send</button>
					</p>
					<p class="h-centered">
						<button class="btn btn-primary" onclick="zeta.onSendAskPinCodeCancelResend.call(zeta)">Resend</button>
					</p>
				</div>
				<small class="operator_desc"></small>
				<div id="result"></div>

				<div class="container small-container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<b>Terms and Conditions</b><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>

				<div class="container small-container h-centered txt-center white col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<b><a onclick='zeta.showForms(zeta.type_form.MAIN_CANCEL,"");' href="#">Cancel Subscription</a></b><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

			<footer class="fixed-bottom h-centered txt-center white">
				<small class="h-centered">Powered by <a href="http://zeta-mobile.com" target="_blank">zeta-mobile.com</a></small>
			</footer>
		</div>
	</body>
</html>