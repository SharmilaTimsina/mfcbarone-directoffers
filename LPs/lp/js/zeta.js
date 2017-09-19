class DOZeta {
	constructor(prod_sku,catalog,subscr_plan_id,language,
				contents_url,base_url,request_uri_add,request_uri_verify,
				request_uri_cancel,request_uri_verify_cancel,
				request_uri_resend, request_access_sms_link,request_login, operator_codes, broker, redirect_countdown, text_content,lang){
		
		this.prod_sku = prod_sku;					
		this.catalog = catalog;
		this.subscr_plan_id = subscr_plan_id;
		this.language = language;
		this.contents_url = contents_url;
		this.base_url = base_url;
		this.request_uri_add = request_uri_add;
		this.request_uri_verify = request_uri_verify;
		this.request_uri_cancel = request_uri_cancel;
		this.request_uri_verify_cancel = request_uri_verify_cancel;
		this.request_uri_resend = request_uri_resend;
		this.operator_codes = operator_codes;
		this.broker = broker;
		this.redirect_countdown = redirect_countdown;
		this.request_access_sms_link = request_access_sms_link;
		this.request_login = request_login;
		this.lang = lang;
		
		this.is_enriched = false;
		this.operator = '';
		this.msisdn = '';
		this.sessionID = '';
		
		//this.form_pin_code_cancel = $("#form_pin_code_cancel");
		this.form_pin_code_add = $("#form_pin_code_add");
		this.form_not_enriched = $("#form_not_enriched");
		this.form_enriched = $("#form_enriched");
		this.redirect_to_contents = $("#redirect_to_contents");
		//this.form_cancel = $("#form_cancel");
		
		this.spinner = $("#loader_zeta");
		this.main_content = $("#main_content");
		this.error_msg = $("#error_msg");

		//$("#text_content").html(text_content);
		
		this.type_form = {IGNORE: -1,HIDE: 0,GOTO_CONTENTS: 1,MAIN_ENRICHED: 2,	MAIN_NOT_ENRICHED: 3,PIN_CODE: 4,MAIN_CANCEL: 5,PIN_CODE_CANCEL: 6,HIDE_NO_SPINNER:7};
		
		this.showForms = function(type_form_id,msg){
			switch(type_form_id){
				case undefined: 
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.show();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case -1: break; //IGNORE
				case 0: //HIDE
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.hide();				
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.show();
					this.main_content.hide();
					break;
				case 1: //REDIRECT_TO_CONTENTS
					this.redirect_to_contents.show();
					this.form_enriched.hide();
					this.form_not_enriched.hide();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					this.goToContents(false);
					break;
				case 2: //MAIN_ENRICHED
					this.redirect_to_contents.hide();
					this.form_enriched.show();
					this.form_not_enriched.hide();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case 3: //MAIN_NOT_ENRICHED
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.show();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case 4: //PIN_CODE
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.hide();
					this.form_pin_code_add.show();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case 5: //MAIN_CANCEL
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.hide();
					this.form_pin_code_add.hide();
					//this.form_cancel.show();
					//this.form_pin_code_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case 6: //PIN_CODE_CANCEL
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.hide();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.show();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				case 7: //HIDE_NO_SPINNER
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.hide();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
				default: //MAIN_NOT_ENRICHED
					this.redirect_to_contents.hide();
					this.form_enriched.hide();
					this.form_not_enriched.show();
					this.form_pin_code_add.hide();
					//this.form_pin_code_cancel.hide();
					//this.form_cancel.hide();
					this.spinner.hide();
					this.main_content.show();
					break;
			}
			if(!is_empty(msg)){
				this.error_msg.html(msg);
				this.error_msg.show();	
			}else{
				this.error_msg.html('');
				this.error_msg.hide();
			}
		};

		this.sendRequest = function (url,params){
			console.log("params:"+JSON.stringify(params,null,4));
			console.log("url:"+url);
			$.ajax({
				url: url,
				data: params,
				type: 'POST',
				crossDomain: true,
				dataType : "jsonp",		
				beforeSend: function(xhr){
					xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
					xhr.setRequestHeader('Access-Control-Allow-Headers', 'origin, content-type, accept');
					xhr.setRequestHeader('Access-Control-Allow-Methods', 'GET,PUT,POST');
				},
				fail: function( jqXHR, textStatus, errorThrown){
					console.log("jqXHR:"+jqXHR);
					console.log("textStatus:"+textStatus);
					console.log("errorThrown:"+errorThrown);
					this.showForms(this.type_form.MAIN_NOT_ENRICHED,this.lang.AJAX_FAIL);
				}
			});
		};

		this.goToContents = function(clicked){
			console.log("goto hash:"+this.hash);
			//var redirect_link = this.contents_url+'?sessionId='+this.sessionID+'&subId='+this.subscription_contract_id+'&msisdn='+this.msisdn+'&operator='+this.operator+'&subscr_plan_id='+this.subscr_plan_id+'&catalog='+this.catalog+'&language='+this.language+'&is_enriched='+this.is_enriched+'&hash='+this.hash;
			var redirect_link = this.contents_url+'?sessionId='+this.session_id+'&zmuak='+this.hash+'&msisdn='+this.msisdn+'&operator='+this.operator;
			
			console.log("in de GoToContents this.contents_url: " + redirect_link);
			if(typeof clicked != "undefined" && clicked === true){
				console.log("GoToContents if");
				window.location.replace(redirect_link);
			}

			if(this.redirect_count_down != false && typeof this.redirect_count_down != "undefined"){
				var countdown_dom = $('#redirect_countdown');
				var countdown_run = function countdown(remaining,countdown_dom,redirect_link){
					if(remaining <= 0){
						window.location.replace(redirect_link);
						return;
					}
					countdown_dom.html(remaining);
					setTimeout(function(){
						countdown(remaining - 1,countdown_dom,redirect_link);
					},1000);
				}(this.redirect_countdown,countdown_dom,redirect_link);
			}
		}
		
		this.onSendAddSubs = function(){
			console.log(">> enter exeConfirm");
			console.log("this.is_enriched"+this.is_enriched);
			this.showForms(this.type_form.HIDE);
			var smsId = '';
			var headerEnrichmentReferenceCode = '';
			
			if(this.is_enriched === true){
				console.log("-- confirm --");
				console.log("subscr_plan_id:"+this.subscr_plan_id);
				console.log("catalog"+this.catalog);
				console.log("prod_sku"+this.prod_sku);

				this.operator = window.TPay.HeaderEnrichment.operatorCode();
				this.msisdn = window.TPay.HeaderEnrichment.msisdn();
				
				var self = this;
				
				console.log(JSON.stringify(params,null,4));
				this.showForms(this.type_form.HIDE_NO_SPINNER);
				window.TPay.HeaderEnrichment.confirm(this.subscr_plan_id, this.catalog, this.prod_sku, function(result,subscriptionId){
					if (result == true){
						console.log("reference number is:" + subscriptionId);
						headerEnrichmentReferenceCode = subscriptionId;
						//ajax add subs
						var params = {
							"msisdn": self.msisdn,
							"operatorCode": self.operator,
							"subscriptionPlanId": self.subscr_plan_id,
							"initialPaymentproductId": self.prod_sku,
							"recurringPaymentproductId": self.prod_sku,
							"productCatalogName": self.catalog,
							"language": self.language,
							"contents_url": self.contents_url,
							"headerEnrichmentReferenceCode": headerEnrichmentReferenceCode,
							"smsId": smsId
						};
						self.showForms(self.type_form.HIDE);
						self.sendRequest(self.base_url+self.request_uri_add,params);
					}else{
						console.log("showNotEnrichedMainForm no execonfirm");
						self.is_enriched = false; 
						self.showForms(self.type_form.MAIN_NOT_ENRICHED,this.lang.3G_FAIL_SUBS_REDI_WIFI);
						return;
					}
				});
			}
			
			if(this.is_enriched === false){
				console.log("enter this.is_enriched === false");
				this.operator = $('#operators').find(":selected").val();
				if(this.operator == 'false'){
					this.showForms(this.type_form.MAIN_NOT_ENRICHED,this.lang.WIFI_VALID_OPERATOR);
					return;
				}

				this.msisdn = $("#mobile_phone").val();
				this.msisdn = this.msisdn.trim();
				if(this.msisdn == ''){
					this.showForms(this.type_form.MAIN_NOT_ENRICHED,this.lang.WIFI_VALID_PHONE);
					return;
				}
				
				//var params = {"subscriptionContractId": 374331}
				//this.sendRequest(this.base_url+this.request_uri_resend,params);
				var params = {
					"msisdn": this.msisdn,
					"operatorCode": this.operator,
					"subscriptionPlanId": this.subscr_plan_id,
					"initialPaymentproductId": this.prod_sku,
					"recurringPaymentproductId": this.prod_sku,
					"productCatalogName": this.catalog,
					"language": this.language,
					"contents_url": this.contents_url,
					"headerEnrichmentReferenceCode": headerEnrichmentReferenceCode,
					"smsId": smsId
				};

				//ajax add subs
				this.sendRequest(this.base_url+this.request_uri_add,params);

				console.log('not enriched');
				console.log("operator:"+this.operator);
				console.log("msisdn:"+this.msisdn);
				console.log("prod_sku:"+this.prod_sku);
				console.log("catalog:"+this.catalog);
				console.log("subscr_plan_id:"+this.subscr_plan_id);
			}
		};
		
		this.onAfterAddSubsWIFI = function(data){//Callback for addNewSubscription - WIFI
			console.log("onAfterAddSubsWIFI:"+JSON.stringify(data,null,4));
			if(data.result == 'true' && data.subscribed == 'true'){
				this.hash = data.hash;
				console.log("--->data.hash_"+data.hash);
				console.log("--->this.hash_"+this.hash);
				this.showForms(this.type_form.GOTO_CONTENTS,this.lang.ALREADY_SUBSCRIBED);
			}
			else if(data.result == 'true' && data.subscribed == 'false' && data.subscriptionContractId != null){
				$('input[name=subscription_contract_id]').val(data.subscriptionContractId);
				console.log("!!!!!!!!!!!!Sucessful add subscription wifi");
				this.customerAccountNumber = data.customerAccountNumber;
				this.subscription_contract_id = data.subscriptionContractId;
				this.showForms(this.type_form.PIN_CODE,this.lang.PIN_CODE_MSG);
			}
			else if(data.result == 'false' && data.subscribed !== 'true' && data.subscribed != 'false'){
				//!!!
				//!!!
				//!!! change to set LANG
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,data.subscribed);
			}
			else{
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,this.lang.WIFI_SUBS_ERROR_MSG);
				console.log("!!!!!!!!!!!!Not Sucessful add subscription wifi");
			}
		};
		
		this.onAfterAddSubs = function(data){//Callback for addNewSubscription - 3g
			console.log("done:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				//Show success form/e ou reedirect ou botão
				console.log("!!!!!!!!!!!!Sucessful add subscription 3g");
				this.hash = data.hash;
				this.subscription_contract_id = data.subscriptionContractId;
				this.showForms(this.type_form.GOTO_CONTENTS,this.lang.SUCCESS_SUBS);
			}else{
				console.log("!!!!!!!!!!!!Not Sucessful add subscription  3g");
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,"Something went wrong, please insert your operator and mobile phone");
			}
		};
		
		this.onSendVerifyPinCodeAdd = function(){
			this.showForms(this.type_form.HIDE);
			var subscription_contract_id = $('input[name=subscription_contract_id]').val();
			var pin_code = $('input[name=pin_code]').val();

			if(!pin_code){
				this.showForms(this.type_form.PIN_CODE,'please insert Pin Code');
				return;
			}
			if(!subscription_contract_id){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
				return;
			}

			var params = {
				"customerAccountNumber" : this.customerAccountNumber,
				"pinCode": pin_code,
				"subscriptionContractId": subscription_contract_id,
				"msisdn": this.msisdn,
				"operatorCode": this.operator,
				"productCatalogName": this.catalog,
				"language": this.language,
				"contents_url": this.contents_url
			}
			
			console.log("-------onSendVerifyPinCodeAdd-------");
			console.log("base_url" + this.base_url);
			console.log("request_uri_verify" + this.request_uri_verify);
			console.log("params" + JSON.stringify(params,null,4));
			console.log("------------------------------------");
			this.sendRequest(this.base_url+this.request_uri_verify,params);
		};
		
		this.onAfterVerifyPinCodeAdd = function(data){
			console.log("onAfterSendAddPinCode:"+JSON.stringify(data,null,4));
			if(data.result == 'true' && data.subscribed == 'true'){
				console.log("!!!!!!!!!!!!Already subscribed wifi pin code");
				this.hash = data.hash;
				console.log("WIFI subs add hash:"+this.hash);
				this.showForms(this.type_form.GOTO_CONTENTS,"you're already subscribed click resend resend message to get an SMS with the link to our service, and/or click redirect to access our service","");
			}
			else if(data.result == 'true' && data.subscribed == 'false'){
				this.hash = data.hash;
				console.log("WIFI subs add hash:"+this.hash);
				console.log("!!!!!!!!!!!!Sucessful add subscription wifi pin code");
				this.showForms(this.type_form.GOTO_CONTENTS,"Thank you for subscribing");
			}else if(data.result == 'true' && data.subscribed == 'Invalid PIN code'){
				console.log("pin failed - error message");
				this.showForms(this.type_form.PIN_CODE,'Invalid PIN code - We sent a SMS with a pin code to your phone, you can resend by clicking the button "Resend PIN code"');
			}else if(data.result == 'true' && data.subscribed == 'Exceed Max Attempt Reached Of Invalid Pin'){
				this.initLP();
				console.log("4 attempts pin failed");
				this.showForms(this.type_form.IGNORE,'Allowed attempts exceeded, please subscribe again, if the problem persists, feel free to contact us at support@zeta-mobile.com');
			}else{
				console.log("pin failed - error message");
				this.showForms(this.type_form.PIN_CODE,'Something happen, please try again, if the problem persists, please try again later or contact us at support@zeta-mobile.com');
			}
		};
		
		this.onSendAskPinCodeAddResend = function(){
			this.showForms(this.type_form.HIDE);
			var subscription_contract_id = $('input[name=subscription_contract_id]').val();
			if(!subscription_contract_id){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
				return;
			}

			var params = {"subscriptionContractId": subscription_contract_id}
			this.sendRequest(this.base_url+this.request_uri_resend,params);
		};
		
		this.onAfterAskPinCodeAddResend = function(data){
			console.log("onAfterResendAddPinCode:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				console.log("!!!!!!!!!!!!Sucessful add subscription wifi pin code");
				this.showForms(this.type_form.PIN_CODE,'Pin code has been resent');
			}else{
				console.log("resend pin failed - error message");
				this.showForms(this.type_form.PIN_CODE,'Something went wrong please try again, if the problem persists, please try again later');
			}
		};
		
		this.onSendLogIn =  function(){
			console.log("onSendLogIn");
			this.showForms(this.type_form.HIDE);

			this.operator = $('#operators').find(":selected").val();
			if(this.operator == 'false'){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Please select the phone operator');
				return;
			}

			this.msisdn = $("#mobile_phone").val();
			this.msisdn = this.msisdn.trim();
			if(this.msisdn == ''){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Please insert the phone number');
				return;
			}

			if(!this.msisdn || !this.operator){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
				return;
			}

			var params = {
				"msisdn": this.msisdn,
				"operatorCode": this.operator,
				"contents_url":this.contents_url,
				"language":this.language
			}

			console.log("params:"+params);
			this.sendRequest(this.base_url+this.request_login,params);
		};
		
		this.onAfterLogIn = function(data){
			
			console.log("onAfterAccessSMSLink:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				console.log("!!!!!!!!!!!!Sucessful sms login");
				this.showForms(this.type_form.HIDE_NO_SPINNER,'An SMS was sent to your phone, please click on the link to confirm your subscription');
			}else{
				console.log("resend login sms failed - error message");
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
			}
		};
		
		this.onSendAccessSMSLink =  function(){
			console.log("onSendAccessSMSLink");
			this.showForms(this.type_form.HIDE);
			if(!this.msisdn || !this.operator){
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
				return;
			}
			var params = {
				"msisdn": this.msisdn,
				"operatorCode": this.operator,
			}
			
			console.log("params:"+params);
			
			this.sendRequest(this.base_url+this.request_access_sms_link,params);
		};
		
		this.onAfterAccessSMSLink = function(data){
			
			console.log("onAfterAccessSMSLink:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				console.log("!!!!!!!!!!!!Sucessful add subscription wifi pin code");
				this.showForms(this.type_form.GOTO_CONTENTS,'An SMS was sent to your phone');
			}else{
				console.log("resend pin failed - error message");
				this.showForms(this.type_form.GOTO_CONTENTS,'SMS not sent');
			}
		};
		/*
		this.onSendAskPinCodeCancel = function(){
			this.showForms(this.type_form.HIDE);
			console.log("enter this.is_enriched === false");
			this.operators_cancel = $('#operators_cancel').find(":selected").val();
			if(this.operators_cancel == 'false'){
				this.showForms(this.type_form.MAIN_CANCEL,'Please select the phone operator');
				return;
			}

			this.msisdn_cancel = $("#mobile_phone_cancel").val();
			this.msisdn_cancel = this.msisdn_cancel.trim();
			if(this.msisdn_cancel == ''){
				this.showForms(this.type_form.MAIN_CANCEL,'Please insert the phone number');
				return;
			}

			console.log('not enriched');
			console.log("operators_cancel:"+this.operators_cancel);
			console.log("msisdn_cancel:"+this.msisdn_cancel);
			console.log("prod_sku:"+this.prod_sku);
			console.log("catalog:"+this.catalog);
			console.log("subscr_plan_id:"+this.subscr_plan_id);

			var subscription_contract_id = $('input[name=subscriptionContractId]').val();
			if(!subscription_contract_id){
				this.showForms(this.type_form.MAIN_CANCEL,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
				return;
			}

			var params = {"subscriptionContractId": subscription_contract_id}
			this.sendRequest(this.base_url+this.request_uri_cancel,params);
		};
		
		this.onAfterAskPinCodeCancel = function(data){
			console.log("onAfterAskPinCodeCancel:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				console.log("!!!!! Cancel Pin Code was sent to your mobile phone");
				this.showForms(this.type_form.MAIN_NOT_ENRICHED,"Your no longer subscribed!");
			}else{
				console.log("resend pin failed - error message");
				this.showForms(this.type_form.PIN_CODE_CANCEL,'Please check if pin code is correct, if it is try resend it');
			}
		};
		
		this.onSendVerifyPinCodeCancel = function(){
			this.showForms(this.type_form.HIDE);
			var subscription_contract_id = $('input[name=subscriptionContractId]').val();
			var pin_code = $('input[name=pinCode]').val();
			
			if(is_empty(subscription_contract_id)){
				this.showForms(this.type_form.PIN_CODE_CANCEL,'Something went wrong, please insert again.<br><small>if the problem persists, please try again later</small>');
			}
			if(is_empty(pin_code)){
				this.showForms(this.type_form.PIN_CODE_CANCEL,'Please insert pin code.');
			}
			var params = {"subscriptionContractId": subscription_contract_id,"pinCode":pin_code}
			
			console.log("-------onSendVerifyPinCodeCancel-------");
			console.log("base_url" + this.base_url);
			console.log("request_uri_verify" + this.request_uri_verify_cancel);
			console.log("params" + JSON.stringify(params,null,4));
			console.log("---------------------------------------");
			this.sendRequest(this.base_url+this.request_uri_verify_cancel,params);	
		};
		
		this.onAfterSendVerifyCancelPinCode = function(data){
			console.log("onAfterResendAddPinCode:"+JSON.stringify(data,null,4));
			if(data.result == 'true'){
				console.log("!!!!!!!!!!!!Sucessful add subscription wifi pin code");
				this.showForms(this.type_form.GOTO_CONTENTS,"your now unsubscribed from the service "+prod_sku+"");
			}else{
				console.log("resend pin failed - error message");
				this.showForms(this.type_form.PIN_CODE_CANCEL,'Please check if pin code is correct, if it is try resend it');
			}
		};
		*/
		this.initLP = function(){
			this.showForms(this.type_form.HIDE);
			console.log("runinnnng LP'S");
			if (window.TPay){
				if (window.TPay.HeaderEnrichment.enriched()){//To detected if header was enriched
					this.is_enriched = true;
					var subs_id = null;
					var has_sub = false;
					window.TPay.HeaderEnrichment.hasSubscription(this.prod_sku, function (hasSub, subId) {
						console.log("hasSub:"+hasSub); 
						console.log("subId:"+subId); 
						subs_id = subId;
						has_sub = hasSub;
					});
					
					if (!has_sub){ //Go to add new subscription process
						this.msisdn = window.TPay.HeaderEnrichment.msisdn();
						this.operator = window.TPay.HeaderEnrichment.operatorCode();

						console.log('--hasSubscription success--');
						console.log("hasSub:"+has_sub);
						console.log('subscr_plan_id:'+this.subscr_plan_id);
						console.log('operator:'+this.operator);
						console.log('msisdn:'+this.msisdn);
						console.log('---------------------------');

						if(is_empty(this.operator) || is_empty(this.msisdn)){
							this.is_enriched = false;
						}else{
							this.showForms(this.type_form.MAIN_ENRICHED);
						}
					}
					else{
						this.subscr_plan_id = subs_id;
						this.session_id = window.TPay.HeaderEnrichment.sessionId();
						this.msisdn = window.TPay.HeaderEnrichment.msisdn();
						this.operator = window.TPay.HeaderEnrichment.operatorCode();
						
						console.log('--hasSubscription success--');
						console.log("hasSub:"+has_sub);
						console.log('subscr_plan_id:'+this.subscr_plan_id);
						console.log('operator:'+this.operator);
						console.log('msisdn:'+this.msisdn);
						console.log('---------------------------');

						//reedirect to contents
						console.log("already subscribed, subscription contract id: " + subs_id);
						if(!is_empty(this.session_id)){
							console.log('session_id:'+this.session_id);
							this.showForms(this.type_form.GOTO_CONTENTS,"you're already subscribed click resend resend message to get an SMS with the link to our service, and/or click redirect to access our service");
						}
						else{
							console.log('No Session error');
						}
					}
				}
			}

			console.log("Show wifi is_enriched:"+this.is_enriched);
			if(this.is_enriched === false){
				//show wifi
				
				console.log("operators_"+JSON.stringify(this.operator_codes,null,4));
				console.log("1 - operators option size():"+$('#operators option').length);
				if($('#operators option').length <= 1){
					console.log("2 - operators option size():"+$('#operators option').length);
					var operators = $("#operators");
				
					
					var len = Object.keys(this.operator_codes).length;
					for (var i = 0;  i < len; i++){
						var opt = document.createElement("option");
						opt.value = this.operator_codes[Object.keys(this.operator_codes)[i]];
						opt.textContent = Object.keys(this.operator_codes)[i];
						//operators.appendChild(opt);
						operators.append(opt);
					}
					//operators.selectedIndex = 0;//fix: moz didn't show the message option selected in the beginning
					operators.prop('selectedIndex', 0);
					//$("#operators_cancel").html(operators.html()); 
				}
				this.showForms(this.type_form.MAIN_NOT_ENRICHED);
				//operators.selectedIndex = 0;//fix: moz didn't show the message option selected in the beginning
			}

			//this.showForms(this.type_form.IGNORE,'hide');
			//this.showForms(this.type_form.HIDE,'hide');
			//this.showForms(this.type_form.MAIN_ENRICHED,'MAIN_ENRICHED');
			//this.showForms(this.type_form.MAIN_NOT_ENRICHED,'MAIN_NOT_ENRICHED');
			//this.showForms(this.type_form.PIN_CODE,'PIN_CODE');
			//this.showForms(this.type_form.PIN_CODE_CANCEL,'PIN_CODE_CANCEL');
		};
    };
};

function is_empty(data){
	switch (typeof data){
		case "undefined": return true;
		case "string": 
			if(data.trim() === '') 
				return true;	
			else 
				return false;
		case "boolean": return false;
		case "number": return false;
		case "object": 
			if(data === null)
				return true;
			else	
				return false;
		case "function": return false;
		case "symbol": return false;
		default: return false;
	}
}