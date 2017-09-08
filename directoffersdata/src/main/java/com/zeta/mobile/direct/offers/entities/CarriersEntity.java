/*
 * Created on 1 Sep 2017 ( Time 15:57:06 )
 * Generated by Telosys Tools Generator ( version 2.1.1 )
 */
// This Bean has a composite Primary Key  

package com.zeta.mobile.direct.offers.entities;

import java.io.Serializable;

//import javax.validation.constraints.* ;
//import org.hibernate.validator.constraints.* ;
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

import com.fasterxml.jackson.annotation.JsonManagedReference;

/**
 * Persistent class for entity stored in table "carriers"
 *
 * @author Telosys Tools Generator
 *
 */

@Entity
@Table(name = "carriers", catalog = "directoffers")
// Define named queries here
@NamedQueries({ @NamedQuery(name = "CarriersEntity.countAll", query = "SELECT COUNT(x) FROM CarriersEntity x") })
public class CarriersEntity implements Serializable {

	private static final long serialVersionUID = 1L;

	// ----------------------------------------------------------------------
	// ENTITY PRIMARY KEY ( EMBEDDED IN AN EXTERNAL CLASS )
	// ----------------------------------------------------------------------
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id", nullable = false)
	private Integer id;

	// ----------------------------------------------------------------------
	// ENTITY DATA FIELDS
	// ----------------------------------------------------------------------
	@Column(name = "networkCode", nullable = false)
	private Integer networkcode;

	@Column(name = "name")
	private String name;

	@Column(name = "msisdnRegexValidation")
	private String msisdnRegexValidation;

	@Column(name = "carrierRequirementsInfo")
	private String carrierRequirementsInfo;

	@Column(name = "carriersPriceLimitPerTransactionInfo")
	private String carriersPriceLimitPerTransactionInfo;

	@Column(name = "monthlyTransactionLimitInfo")
	private String monthlyTransactionLimitInfo;

	@Column(name = "allowDecimalsInfo")
	private boolean allowDecimalsInfo;

	// ----------------------------------------------------------------------
	// ENTITY LINKS ( RELATIONSHIP )
	// ----------------------------------------------------------------------
	@ManyToOne
	@JsonManagedReference
	@JoinColumn(name = "countryId", referencedColumnName = "id", insertable = false, updatable = false)
	private CountriesEntity countries;

	@ManyToOne
	@JsonManagedReference
	@JoinColumn(name = "connectionId", referencedColumnName = "id", insertable = false, updatable = false)
	private ConnectionsEntity connections;

	// ----------------------------------------------------------------------
	// CONSTRUCTOR(S)
	// ----------------------------------------------------------------------

	// ----------------------------------------------------------------------
	// GETTER & SETTER FOR THE COMPOSITE KEY
	// ----------------------------------------------------------------------

	// ----------------------------------------------------------------------
	// GETTERS & SETTERS FOR FIELDS
	// ----------------------------------------------------------------------
	// --- DATABASE MAPPING : networkCode ( INT )
	public void setNetworkcode(Integer networkcode) {
		this.networkcode = networkcode;
	}

	public Integer getNetworkcode() {
		return this.networkcode;
	}

	// --- DATABASE MAPPING : name ( TEXT )
	public void setName(String name) {
		this.name = name;
	}

	public String getName() {
		return this.name;
	}

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public String getMsisdnRegexValidation() {
		return msisdnRegexValidation;
	}

	public void setMsisdnRegexValidation(String msisdnRegexValidation) {
		this.msisdnRegexValidation = msisdnRegexValidation;
	}

	public String getCarrierRequirementsInfo() {
		return carrierRequirementsInfo;
	}

	public void setCarrierRequirementsInfo(String carrierRequirementsInfo) {
		this.carrierRequirementsInfo = carrierRequirementsInfo;
	}

	public String getCarriersPriceLimitPerTransactionInfo() {
		return carriersPriceLimitPerTransactionInfo;
	}

	public void setCarriersPriceLimitPerTransactionInfo(String carriersPriceLimitPerTransactionInfo) {
		this.carriersPriceLimitPerTransactionInfo = carriersPriceLimitPerTransactionInfo;
	}

	public String getMonthlyTransactionLimitInfo() {
		return monthlyTransactionLimitInfo;
	}

	public void setMonthlyTransactionLimitInfo(String monthlyTransactionLimitInfo) {
		this.monthlyTransactionLimitInfo = monthlyTransactionLimitInfo;
	}

	public boolean isAllowDecimalsInfo() {
		return allowDecimalsInfo;
	}

	public void setAllowDecimalsInfo(boolean allowDecimalsInfo) {
		this.allowDecimalsInfo = allowDecimalsInfo;
	}

	// ----------------------------------------------------------------------
	// GETTERS & SETTERS FOR LINKS
	// ----------------------------------------------------------------------
	public void setCountries(CountriesEntity countries) {
		this.countries = countries;
	}

	public CountriesEntity getCountries() {
		return this.countries;
	}

	public void setConnections(ConnectionsEntity connections) {
		this.connections = connections;
	}

	public ConnectionsEntity getConnections() {
		return this.connections;
	}

}
