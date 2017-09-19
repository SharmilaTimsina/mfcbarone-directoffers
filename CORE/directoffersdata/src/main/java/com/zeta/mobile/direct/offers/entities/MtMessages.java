package com.zeta.mobile.direct.offers.entities;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonManagedReference;
import com.zeta.mobile.direct.offers.entities.helpers.MessageDefinition;

@Entity
@Table(name = "mt_messages", catalog = "directoffers")
public class MtMessages {

	@Id
	@Column(name = "id", nullable = false)
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	
	@Column(name = "type")
	private MessageDefinition definition;
	
	@Column(name = "sent_date")
	private Date sentDate;
	
	@Column(name = "origin")
	private String origin;
	
	@Column(name = "destination")
	private String destination;
	
	@Column(name = "content")
	private String content;
	
	@Column(name="sent_by_partner")
	private Boolean sentByPartner;
	
	@ManyToOne
	@JoinColumn(name = "subscription_id", referencedColumnName = "id")
	@JsonManagedReference
	private Subscription subscription;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public MessageDefinition getDefinition() {
		return definition;
	}

	public void setDefinition(MessageDefinition definition) {
		this.definition = definition;
	}

	public Date getSentDate() {
		return sentDate;
	}

	public void setSentDate(Date sentDate) {
		this.sentDate = sentDate;
	}

	public String getOrigin() {
		return origin;
	}

	public void setFrom(String origin) {
		this.origin = origin;
	}

	public String getDestination() {
		return destination;
	}

	public void setDestination(String destination) {
		this.destination = destination;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public Boolean getSentByPartner() {
		return sentByPartner;
	}

	public void setSentByPartner(Boolean sentByPartner) {
		this.sentByPartner = sentByPartner;
	}

	public Subscription getSubscription() {
		return subscription;
	}

	public void setSubscription(Subscription subscription) {
		this.subscription = subscription;
	}

	@Override
	public String toString() {
		return "MtMessages [id=" + id + ", definition=" + definition + ", sentDate=" + sentDate + ", origin=" + origin
				+ ", destination=" + destination + ", content=" + content + ", sentByPartner=" + sentByPartner
				+ ", subscription=" + subscription + "]";
	}
		
}
