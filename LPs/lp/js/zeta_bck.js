var is_enriched = false;
var operator = '';
var mobile_phone = '';

function onAfterAddSubsWIFI(data) { 
	console.log("onAfterAddSubsWIFI:"+JSON.stringify(data,null,4));
	if(data.result == 'true' && data.subscriptionContractId != null){
		$('input[name=subscription_contract_id]').val(data.subscriptionContractId);
		console.log("!!!!!!!!!!!!Sucessful add subscription wifi");
		showPinCodeAddForm();
	}else{
		//show error message
		console.log("!!!!!!!!!!!!Not Sucessful add subscription wifi");
	}
	showHideSpinner(false);
}
function onAfterAddSubs(data){
	console.log("done:"+JSON.stringify(data,null,4));
	if(data.result == 'true'){
		//Show success form/e ou reedirect
		console.log("!!!!!!!!!!!!Sucessful add subscription 3g");
	}else{
		//show error message
		console.log("!!!!!!!!!!!!Not Sucessful add subscription  3g");
	}
	showHideSpinner(false);
}
function onAfterSendAddPinCode(data) { 
	console.log("onAfterSendAddPinCode:"+JSON.stringify(data,null,4));
	if(data.result == 'true'){
		console.log("pin success - reedirect");
		//showPinCodeAddForm();
	}else{
		//showResendPin();
		console.log("pin failed - resend pin");
		//resend pin
		//show error message
	}
	showHideSpinner(false);
}
function onAfterResendAddPinCode(data) { 
	console.log("onAfterResendAddPinCode:"+JSON.stringify(data,null,4));
	if(data.result == 'true'){
		console.log("pin success - reedirect");
		show_error_msg('Pin Code as been sent');
		showPinCodeAddForm();
	}else{
		//showResendPin();
		console.log("pin failed - resend pin");
		//resend pin
		//show error message
	}
	showHideSpinner(false);
}
function onAfterSendCancelPinCode(data) { 
	console.log("onAfterAddSubsWIFI:"+JSON.stringify(data,null,4));
	if(data.result == 'true'){
		showPinCodeAddForm();
	}else{
		//show error message

	}
	showHideSpinner(false);
}

function exeConfirm(){
	showHideSpinner(true);
	if(is_enriched === true){
		//tratar os erros aqui, se o confirm não funcionar fazer manual

		console.log("-- confirm --");
		console.log("subscr_plan_id:"+subscr_plan_id);
		console.log("catalog"+catalog);
		console.log("prod_sku"+prod_sku);
		window.TPay.HeaderEnrichment.confirm(subscr_plan_id, catalog, prod_sku, function(result,subscriptionId){
			if (result == true){
				console.log("reference number is:" + subscriptionId);
				operator = window.TPay.HeaderEnrichment.operatorCode();
				mobile_phone = window.TPay.HeaderEnrichment.msisdn();
				
				console.log("operator:"+operator);
				console.log("mobile_phone:"+mobile_phone);
				console.log("prod_sku:"+prod_sku);
				console.log("catalog:"+catalog);
				console.log("subscr_plan_id:"+subscr_plan_id);
				addSubscriptionContractRequest(subscriptionId);
			}
			else{
				
				console.log("showNotEnrichedMainForm no execonfirm");
				
				is_enriched = false;
				showNotEnrichedMainForm();
				showHideSpinner(false);
				show_error_msg("teste erro");
				console.log("error");
				return;
			}
		});
	}
	
	if(is_enriched === false){
		//show form sem header henrichment
		operator = $('#operators').find(":selected").val();
		if(operator == 'false'){
			show_error_msg('Please select the phone operator');
			return;
		}
		
		mobile_phone = $("#mobile_phone").val();
		mobile_phone = mobile_phone.trim();
		if(mobile_phone == ''){
			show_error_msg('Please insert the phone number');
			return;
		}

		console.log('not enriched');
		console.log("operator:"+operator);
		console.log("mobile_phone:"+mobile_phone);
		console.log("prod_sku:"+prod_sku);
		console.log("catalog:"+catalog);
		console.log("subscr_plan_id:"+subscr_plan_id);

		addSubscriptionContractRequest('');
	}
}
function addSubscriptionContractRequest(subscriptionId){
	showHideSpinner(true);
	var smsId = '';

	var params = 
	{
		"msisdn": mobile_phone,
		"operatorCode": operator,
		"subscriptionPlanId": subscr_plan_id,
		"initialPaymentproductId": prod_sku,
		"recurringPaymentproductId": prod_sku,
		"productCatalogName": catalog,
		"language": language,
		"headerEnrichmentReferenceCode": subscriptionId,
		"smsId": smsId
	};
	
	
	sendRequest(base_url+request_uri_add,params);
}
function verifySubscriptionContract(){
	var subscription_contract_id = $('input[name=subscription_contract_id]').val();
    var pin_code = $('input[name=pin_code]').val();
	
	if(!pin_code){
		show_error_msg('please insert Pin Code');
		return;
	}
	if(!subscription_contract_id){
		show_error_msg('Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
		showNotEnrichedMainForm();
		return;
	}
	
	var params = {
		"pinCode": pin_code,
		"subscriptionContractId": subscription_contract_id
	}
	sendRequest(base_url+request_uri_verify,params);
}
function sendSubscriptionContractVerificationSMS(){
	showHideSpinner(false);
	var subscription_contract_id = $('input[name=subscription_contract_id]').val();
	
	if(!subscription_contract_id){
		show_error_msg('Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
		showNotEnrichedMainForm();
		return;
	}
	
	var params = {
		"subscriptionContractId": subscription_contract_id
	}
	sendRequest(base_url+request_uri_resend,params);
}
function cancelSubscriptionContractRequest(){
	var subscription_contract_id = $('input[name=subscriptionContractId]').val();
    var pin_code = $('input[name=pinCode]').val();
	sendRequest(base_url+request_uri_cancel,params);
}
function verifySubscriptionCancellationPin(){
	var subscription_contract_id = $('input[name=subscriptionContractId]').val();
    var pin_code = $('input[name=pinCode]').val();
	sendRequest(base_url+request_uri_verify_cancel,params);	
}
function sendRequest(url,params){
	console.log("params:"+params);
	console.log("url:"+url);
	$.ajax({
		url: url,
		data: params,
		type: 'POST',
		crossDomain: true,
		dataType : "jsonp",		
		beforeSend: function(xhr) {
			xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
			xhr.setRequestHeader('Access-Control-Allow-Headers', 'origin, content-type, accept');
			xhr.setRequestHeader('Access-Control-Allow-Methods', 'GET,PUT,POST');
		}
	});
}
function done(data){
	console.log("YEEEEEEEEEEEEEEEEEEAHHHH:");
	console.log("done:"+JSON.stringify(data,null,4));
	document.getElementById("result").innerHTML = JSON.stringify(data,null,4); 
	var data = Object.keys(data).map(function(k) { return data[k] });
	showHideSpinner(false);
}
function fail(data){show_error_msg(data);}
function always(data){show_error_msg(data);}
function show_error_msg(msg){
	var err = document.getElementById("error_msg");
	$("#error_msg").html(msg);
	$("#error_msg").show();
}
function hide_error_msg(){
	$("#error_msg").hide();
}
function showNotEnrichedMainForm(){
	console.log("showNotEnrichedMainForm +");
	$("#form_pin_code_cancel").hide();
	$("#form_pin_code_add").hide();
	$("#form_mob_s_header_enrich").show();
	$("#enriched_subs_button").hide();
}
function showEnrichedMainForm(){
	console.log("showEnrichedMainForm +");
	$("#form_pin_code_cancel").hide();
	$("#form_pin_code_add").hide();
	$("#form_mob_s_header_enrich").hide();
	$("#enriched_subs_button").show();
}
function showPinCodeCancelForm(){
	console.log("showPinCodeCancelForm +");
	$("#form_pin_code_cancel").show();
	$("#form_pin_code_add").hide();
	$("#form_mob_s_header_enrich").hide();
	$("#enriched_subs_button").hide();
}
function showCancelForm(){
	console.log("showCancelForm +");
	$("#form_pin_code_cancel").show();
	$("#form_pin_code_add").hide();
	$("#form_mob_s_header_enrich").hide();
	$("#enriched_subs_button").hide();
}
function showPinCodeAddForm(){
	console.log("showPinCodeAddForm +");
	$("#form_pin_code_cancel").hide();
	$("#form_pin_code_add").show();
	$("#form_mob_s_header_enrich").hide();
	$("#enriched_subs_button").hide();
}
function hideForms(){
	showHideSpinner(true);
	console.log("-- hideForms +");
	$("#form_pin_code_cancel").hide();
	$("#form_pin_code_add").hide();
	$("#form_mob_s_header_enrich").hide();
	$("#enriched_subs_button").hide();
}
function showHideSpinner(spinner_status = false){
	if(spinner_status == true){
		$("#spinner").show();
		$("#main_content").hide();
	}else{
		$("#spinner").hide();
		$("#main_content").show();	
	}
}
function check_tpay_connection(){
	console.log('check_tpay_connection');
	if (window.TPay){
		if (window.TPay.HeaderEnrichment.enriched()){//To detected if header was enriched
			console.log('antes is_enriched'+is_enriched);
			is_enriched = true;
			console.log('depois is_enriched'+is_enriched);
			
			window.TPay.HeaderEnrichment.hasSubscription(prod_sku, function (hasSub, subId) {
				console.log("hasSub:"+JSON.stringify(hasSub,null,4)); 
				console.log("subId:"+JSON.stringify(subId,null,4)); 
				
				if (!hasSub){
					showEnrichedMainForm();
					showHideSpinner(false);
					
					console.log("do subscription:"+!hasSub);
					//user is not active subscriber, proceed with subscription 
					mobile_phone = window.TPay.HeaderEnrichment.msisdn();
					operator = window.TPay.HeaderEnrichment.operatorCode();
					//subscr_plan_id = subId;
					
					console.log('--hasSubscription success--');
					console.log('subscr_plan_id:'+subscr_plan_id);
					console.log('operator:'+operator);
					console.log('mobile_phone:'+mobile_phone);
					console.log('---------------------------');
					
					if((typeof operator == "undefined") || (operator == '') || (typeof mobile_phone == "undefined") || (mobile_phone == '')){
						is_enriched = false;
					}
				}
				else{
					subscr_plan_id = subId;
					//reedirect to contents
					console.log("already subscribed, subscription contract id: " + subId);
					
					//send/put stats info

					window.location.replace(contents_url);
				}
			});
		}
	}
	
	console.log("- show wifi is_enriched:"+is_enriched);
	if(is_enriched == false){
		//show wifi
		
		console.log("operators_"+JSON.stringify(operator_codes,null,4));
		var operators = document.getElementById("operators");
		var len = Object.keys(operator_codes).length;
		console.log("len:"+len);
		console.log(JSON.stringify(operator_codes,null,4));
		
		for (var i = 0;  i < len; i++){
			var opt = document.createElement("option");
			opt.value = operator_codes[Object.keys(operator_codes)[i]];
			opt.textContent = Object.keys(operator_codes)[i];
			operators.appendChild(opt);
		}

		console.log('ini'+showNotEnrichedMainForm);
		showNotEnrichedMainForm();
		showHideSpinner(false);
		//var form = document.getElementById('form_mob_s_header_enrich');
		//form.style.display = 'block';

		operators.selectedIndex = 0;
	}

	//showEnrichedMainForm();
	//showNotEnrichedMainForm();
	//showPinCodeAddForm();
	//showPinCodeCancelForm();
}
window.onload = function() {
	hideForms();
	check_tpay_connection();
};