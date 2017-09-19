package com.zeta.mobile.direct.offers.entities.helpers;

import com.fasterxml.jackson.annotation.JsonFormat;

@JsonFormat(shape = JsonFormat.Shape.STRING)
public enum MessageDefinition {
	Default,
	NotIn,
	WelcomeFree,
	Welcome,
	AlreadyIn,
	HelpInfo,
	PointsCredits,
	Reminder,
	Renewal,
	RenewalFailed,
	Unsub,
	AlreadyOut,
	Rejoin,
	Blacklist,
	OneShot,
	Pin
}
