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
@Table(name = "mo_messages", catalog = "directoffers")
public class MoMessages {
	
	@Id
	@Column(name = "id", nullable = false)
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	
	@Column(name = "type")
	private MessageDefinition definition;
	
	@Column(name = "received_date")
	private Date receivedDate;
	
	@Column(name = "origin")
	private String origin;
	
	@Column(name = "destination")
	private String destination;
	
	@Column(name = "content")
	private String content;
	
	@Column(name = "processed_by_partner")
	private Boolean processedByPartner;
	
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

	public Date getReceivedDate() {
		return receivedDate;
	}

	public void setReceivedDate(Date receivedDate) {
		this.receivedDate = receivedDate;
	}

	public String getOrigin() {
		return origin;
	}

	public void setOrigin(String origin) {
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

	public Boolean getProcessedByPartner() {
		return processedByPartner;
	}

	public void setProcessedByPartner(Boolean processedByPartner) {
		this.processedByPartner = processedByPartner;
	}

	public Subscription getSubscription() {
		return subscription;
	}

	public void setSubscription(Subscription subscription) {
		this.subscription = subscription;
	}

	@Override
	public String toString() {
		return "MoMessages [id=" + id + ", definition=" + definition + ", receivedDate=" + receivedDate + ", origin="
				+ origin + ", destination=" + destination + ", content=" + content + ", processedByPartner="
				+ processedByPartner + ", subscription=" + subscription + "]";
	}
	
}
