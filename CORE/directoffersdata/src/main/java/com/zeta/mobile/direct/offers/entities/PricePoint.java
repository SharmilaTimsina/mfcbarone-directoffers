package com.zeta.mobile.direct.offers.entities;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
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
import com.zeta.mobile.direct.offers.entities.helpers.PayType;
import com.zeta.mobile.direct.offers.entities.helpers.PricePointType;


@Entity
@Table(name = "price_point", catalog = "directoffers")
// Define named queries here
@NamedQueries({ @NamedQuery(name = "PricePoint.countAll", query = "SELECT COUNT(x) FROM PricePoint x") })
public class PricePoint implements Serializable {

	private static final long serialVersionUID = 1L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "id", nullable = false)
	private Long id;
	
	@Column(name = "type", nullable = false)
	private PricePointType type;
	
	@Column(name = "value", nullable = false)
	private Double value;

	@Column(name = "frequency", nullable = false)
	private Integer frequency;
	
	@Column(name = "is_auto_renew")
	private Boolean isAutoRenew;
	
	@Column(name = "renewal_interval")
	private long renewal_interval;
	
	@Column(name = "retry_num")
	private int retryNum;

	@Column(name = "minutes_before_retry")
	private int minutesBeforeRetry;
	
	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "creation_date")
	private Date creationdate;

	@Column(name = "created_by")
	private String createdby;

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "edition_date")
	private Date editiondate;

	@Column(name = "edited_by")
	private String editedby;

	@Column(name = "pay_type")
	private PayType payType;
	
	@JoinColumn(name = "price_plan_id", referencedColumnName = "id", insertable = false, updatable = false)
	@ManyToOne
	@JsonManagedReference
	private PricePlan pricePlan;

	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public PricePointType getType() {
		return type;
	}

	public void setType(PricePointType type) {
		this.type = type;
	}

	public Double getValue() {
		return value;
	}

	public void setValue(Double value) {
		this.value = value;
	}

	public Integer getFrequency() {
		return frequency;
	}

	public void setFrequency(Integer frequency) {
		this.frequency = frequency;
	}

	public Boolean getIsAutoRenew() {
		return isAutoRenew;
	}

	public void setIsAutoRenew(Boolean isAutoRenew) {
		this.isAutoRenew = isAutoRenew;
	}

	public long getRenewal_interval() {
		return renewal_interval;
	}

	public void setRenewal_interval(long renewal_interval) {
		this.renewal_interval = renewal_interval;
	}

	public int getRetryNum() {
		return retryNum;
	}

	public void setRetryNum(int retryNum) {
		this.retryNum = retryNum;
	}

	public int getMinutesBeforeRetry() {
		return minutesBeforeRetry;
	}

	public void setMinutesBeforeRetry(int minutesBeforeRetry) {
		this.minutesBeforeRetry = minutesBeforeRetry;
	}

	public Date getCreationdate() {
		return creationdate;
	}

	public void setCreationdate(Date creationdate) {
		this.creationdate = creationdate;
	}

	public String getCreatedby() {
		return createdby;
	}

	public void setCreatedby(String createdby) {
		this.createdby = createdby;
	}

	public Date getEditiondate() {
		return editiondate;
	}

	public void setEditiondate(Date editiondate) {
		this.editiondate = editiondate;
	}

	public String getEditedby() {
		return editedby;
	}

	public void setEditedby(String editedby) {
		this.editedby = editedby;
	}

	public PayType getPayType() {
		return payType;
	}

	public void setPayType(PayType payType) {
		this.payType = payType;
	}

	@Override
	public String toString() {
		return "PricePoint [id=" + id + ", type=" + type + ", value=" + value + ", frequency=" + frequency
				+ ", isAutoRenew=" + isAutoRenew + ", renewal_interval=" + renewal_interval + ", retryNum=" + retryNum
				+ ", minutesBeforeRetry=" + minutesBeforeRetry + ", creationdate=" + creationdate + ", createdby="
				+ createdby + ", editiondate=" + editiondate + ", editedby=" + editedby + ", payType=" + payType + "]";
	}
	
	
}
