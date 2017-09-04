package com.zeta.mobile.direct.offers.tpayconnector.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.google.common.collect.Lists;
import com.zeta.mobile.direct.offers.entities.SubscriptionsEntity;
import com.zeta.mobile.direct.offers.repository.SubscriptionsJpaRepository;
import com.zeta.mobile.direct.offers.tpayconnector.rest.requests.AddSubscriptionRequest;
import com.zeta.mobile.direct.offers.tpayconnector.rest.requests.ChangeSubscriptionStatusRequest;
import com.zeta.mobile.direct.offers.tpayconnector.rest.requests.SendMTRequest;
import com.zeta.mobile.direct.offers.tpayconnector.rest.requests.SubscriptionPayRequest;
import com.zeta.mobile.direct.offers.tpayconnector.rest.requests.VerifySubscriptionRequest;
import com.zeta.mobile.direct.offers.tpayconnector.rest.responses.AddSubscriptionResponse;
import com.zeta.mobile.direct.offers.tpayconnector.rest.responses.ChangeSubscriptionStatusResponse;
import com.zeta.mobile.direct.offers.tpayconnector.rest.responses.SendMTResponse;
import com.zeta.mobile.direct.offers.tpayconnector.rest.responses.SubscriptionPayResponse;
import com.zeta.mobile.direct.offers.tpayconnector.rest.responses.VerifySubscriptionResponse;

@RestController
@RequestMapping("subscriptions")
public class SubscriptionsRestController {

	@Autowired
	private SubscriptionsJpaRepository subscriptionsRepo;

	@RequestMapping(value = "/all", method = RequestMethod.GET, produces = "application/json")
	public ArrayList<SubscriptionsEntity> getAllSubscriptions() {
		Iterable<SubscriptionsEntity> subscriptionsIterable = subscriptionsRepo.findAll();
		ArrayList<SubscriptionsEntity> list = Lists.newArrayList(subscriptionsIterable);
		return list;
	}

	@RequestMapping(value = "/add", method = RequestMethod.PUT, produces = "application/json")
	public AddSubscriptionResponse addSubscription(@RequestBody AddSubscriptionRequest request) {
		// // TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/verify", method = RequestMethod.POST, produces = "application/json")
	public VerifySubscriptionResponse verifySubscription(@RequestBody VerifySubscriptionRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/changeStatus", method = RequestMethod.POST, produces = "application/json")
	public ChangeSubscriptionStatusResponse changeSubscriptionStatus(
			@RequestBody ChangeSubscriptionStatusRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/payment", method = RequestMethod.POST, produces = "application/json")
	public SubscriptionPayResponse subscriptionPayment(@RequestBody SubscriptionPayRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	@RequestMapping(value = "/sendMT", method = RequestMethod.PUT, produces = "application/json")
	public SendMTResponse sendMt(@RequestBody SendMTRequest request) {
		// TODO ADD BUSINESS LOGIC
		return null;
	}

	/* REQUEST OBJECT EXAMPLES */
	@RequestMapping(value = "/add/example", method = RequestMethod.GET, produces = "application/json")
	public AddSubscriptionRequest addSubscriptionExample() {
		AddSubscriptionRequest request = new AddSubscriptionRequest();
		return request;
	}

	@RequestMapping(value = "/verify/example", method = RequestMethod.GET, produces = "application/json")
	public VerifySubscriptionRequest verifySubscriptionExample() {
		VerifySubscriptionRequest request = new VerifySubscriptionRequest();
		return request;
	}

	@RequestMapping(value = "/changeStatus/example", method = RequestMethod.GET, produces = "application/json")
	public ChangeSubscriptionStatusRequest changeSubscriptionStatusExample() {
		ChangeSubscriptionStatusRequest request = new ChangeSubscriptionStatusRequest();
		return request;
	}

	@RequestMapping(value = "/payment/example", method = RequestMethod.GET, produces = "application/json")
	public SubscriptionPayRequest SubscriptionPayRequestExample() {
		SubscriptionPayRequest request = new SubscriptionPayRequest();
		return request;
	}

	@RequestMapping(value = "/sendMT/example", method = RequestMethod.GET, produces = "application/json")
	public SendMTRequest sendMtExample() {
		SendMTRequest request = new SendMTRequest();
		return request;
	}
}
