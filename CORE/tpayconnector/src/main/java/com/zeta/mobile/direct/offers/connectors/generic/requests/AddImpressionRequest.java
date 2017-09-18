package com.zeta.mobile.direct.offers.connectors.generic.requests;

public class AddImpressionRequest {

	public AddImpressionRequest() {
		super();
	}

	private String offerUrl;

	private String campaignName;

	private String timezone;

	private String browserlanguage;

	private String platform;

	private String broswer;

	private String sourceip;

	private String screensize;

	private String device;

	public String getOfferUrl() {
		return offerUrl;
	}

	public void setOfferUrl(String offerUrl) {
		this.offerUrl = offerUrl;
	}

	public String getTimezone() {
		return timezone;
	}

	public void setTimezone(String timezone) {
		this.timezone = timezone;
	}

	public String getBrowserlanguage() {
		return browserlanguage;
	}

	public void setBrowserlanguage(String browserlanguage) {
		this.browserlanguage = browserlanguage;
	}

	public String getPlatform() {
		return platform;
	}

	public void setPlatform(String platform) {
		this.platform = platform;
	}

	public String getBroswer() {
		return broswer;
	}

	public void setBroswer(String broswer) {
		this.broswer = broswer;
	}

	public String getSourceip() {
		return sourceip;
	}

	public void setSourceip(String sourceip) {
		this.sourceip = sourceip;
	}

	public String getScreensize() {
		return screensize;
	}

	public void setScreensize(String screensize) {
		this.screensize = screensize;
	}

	public String getDevice() {
		return device;
	}

	public void setDevice(String device) {
		this.device = device;
	}

	public String getCampaignName() {
		return campaignName;
	}

	public void setCampaignName(String campaignName) {
		this.campaignName = campaignName;
	}

	@Override
	public String toString() {
		return "AddImpressionRequest [offerUrl=" + offerUrl + ", campaignName=" + campaignName + ", timezone="
				+ timezone + ", broswerlanguage=" + browserlanguage + ", platform=" + platform + ", broswer=" + broswer
				+ ", sourceip=" + sourceip + ", screensize=" + screensize + ", device=" + device + "]";
	}

}
