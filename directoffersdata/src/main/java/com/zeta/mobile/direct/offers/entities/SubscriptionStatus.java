package com.zeta.mobile.direct.offers.entities;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import com.fasterxml.jackson.annotation.JsonManagedReference;
import com.zeta.mobile.direct.offers.entities.helpers.UserSubscriptionStatus;

@Entity
@Table(name = "subscription_status", catalog = "directoffers")
// Define named queries here
@NamedQueries({
		@NamedQuery(name = "SubscriptionStatus.countAll", query = "SELECT COUNT(x) FROM SubscriptionStatus x") })
public class SubscriptionStatus {

	@Id
	@Column(name = "id", nullable = false)
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	@Enumerated(EnumType.STRING)
	@Column(name = "status", nullable = false)
	private UserSubscriptionStatus status;

	@ManyToOne
	@JoinColumn(name = "subscription_id", referencedColumnName = "id")
	@JsonManagedReference
	private Subscription subscription;

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "status_date", nullable = false)
	private Date statusDate;

	@Column(name = "status_reason", nullable = false)
	private String statusReason;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public UserSubscriptionStatus getStatus() {
		return status;
	}

	public void setStatus(UserSubscriptionStatus status) {
		this.status = status;
	}

	public Subscription getSubscription() {
		return subscription;
	}

	public void setSubscription(Subscription subscription) {
		this.subscription = subscription;
	}

	public Date getStatusDate() {
		return statusDate;
	}

	public void setStatusDate(Date statusDate) {
		this.statusDate = statusDate;
	}

	public String getStatusReason() {
		return statusReason;
	}

	public void setStatusReason(String statusReason) {
		this.statusReason = statusReason;
	}
}
