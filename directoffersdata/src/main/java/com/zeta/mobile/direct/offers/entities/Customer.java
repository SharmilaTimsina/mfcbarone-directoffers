package com.zeta.mobile.direct.offers.entities;

import java.util.Date;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import com.fasterxml.jackson.annotation.JsonBackReference;
import com.fasterxml.jackson.annotation.JsonManagedReference;

@Entity
@Table(name = "customers", catalog = "directoffers")

@NamedQueries({ @NamedQuery(name = "Customer.countAll", query = "SELECT COUNT(x) FROM Customer x"),
		@NamedQuery(name = "Customer.findByMsisdnAndCarrier", query = "SELECT x FROM Customer x where x.msisdn=:custMsisdn and x.carrier = :custCarrier")

})
public class Customer {

	@Id
	@Column(name = "id", nullable = false)
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;

	@Column(name = "name")
	private String name;

	@Column(name = "surname")
	private String surname;

	@Column(name = "email")
	private String email;

	@Column(name = "msisdn", nullable = false)
	private String msisdn;

	@ManyToOne
	@JoinColumn(name = "carrier_id", referencedColumnName = "id", nullable = false)
	@JsonManagedReference
	private Carrier carrier;

	@Column(name = "status", nullable = false)
	private String status;

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "creationDate", nullable = false)
	private Date creationdate;

	@Column(name = "createdBy", nullable = false)
	private String createdby;

	@Column(name = "externalId")
	private String externalId;

	@Column(name = "language", nullable = false)
	private String language;

	@OneToMany(mappedBy = "customer", targetEntity = Subscription.class)
	@JsonBackReference
	private List<Subscription> listOfSubscriptions;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getSurname() {
		return surname;
	}

	public void setSurname(String surname) {
		this.surname = surname;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getMsisdn() {
		return msisdn;
	}

	public void setMsisdn(String msisdn) {
		this.msisdn = msisdn;
	}

	public Carrier getCarrier() {
		return carrier;
	}

	public void setCarrier(Carrier carrier) {
		this.carrier = carrier;
	}

	public String getStatus() {
		return status;
	}

	public void setStatus(String status) {
		this.status = status;
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

	public String getLanguage() {
		return language;
	}

	public void setLanguage(String language) {
		this.language = language;
	}

	@Override
	public String toString() {
		return "CustomersEntity [id=" + id + ", name=" + name + ", surname=" + surname + ", email=" + email
				+ ", msisdn=" + msisdn + ", carrier=" + carrier + ", status=" + status + ", creationdate="
				+ creationdate + ", createdby=" + createdby + "]";
	}

}
