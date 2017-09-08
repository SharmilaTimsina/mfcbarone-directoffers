/*
 * Created on 1 Sep 2017 ( Time 15:57:07 )
 * Generated by Telosys Tools Generator ( version 2.1.1 )
 */
// This Bean has a basic Primary Key (not composite) 

package com.zeta.mobile.direct.offers.entities;

import java.io.Serializable;

//import javax.validation.constraints.* ;
//import org.hibernate.validator.constraints.* ;

import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonBackReference;

/**
 * Persistent class for entity stored in table "currencies"
 *
 * @author Telosys Tools Generator
 *
 */

@Entity
@Table(name = "currencies", catalog = "directoffers")
// Define named queries here
@NamedQueries({ @NamedQuery(name = "CurrenciesEntity.countAll", query = "SELECT COUNT(x) FROM CurrenciesEntity x") })
public class CurrenciesEntity implements Serializable {

	private static final long serialVersionUID = 1L;

	// ----------------------------------------------------------------------
	// ENTITY PRIMARY KEY ( BASED ON A SINGLE FIELD )
	// ----------------------------------------------------------------------
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id", nullable = false)
	private Integer id;

	// ----------------------------------------------------------------------
	// ENTITY DATA FIELDS
	// ----------------------------------------------------------------------
	@Column(name = "currency", nullable = false)
	private String currency;

	@Column(name = "isoCode", nullable = false)
	private String isocode;

	@Column(name = "isoSymbol", nullable = false)
	private String isosymbol;

	@Column(name = "thousandsSeparator", nullable = false)
	private String thousandsSeparator;

	@Column(name = "decimalSeparator", nullable = false)
	private String decimalSeparator;

	// ----------------------------------------------------------------------
	// ENTITY LINKS ( RELATIONSHIP )
	// ----------------------------------------------------------------------
	@OneToMany(mappedBy = "currencies", targetEntity = ConnectionsEntity.class)
	@JsonBackReference
	private List<ConnectionsEntity> listOfConnections;

	@OneToMany(mappedBy = "currencies", targetEntity = PricepointplanEntity.class)
	@JsonBackReference
	private List<PricepointplanEntity> listOfPricepointplan;

	// ----------------------------------------------------------------------
	// CONSTRUCTOR(S)
	// ----------------------------------------------------------------------
	public CurrenciesEntity() {
		super();
	}

	// ----------------------------------------------------------------------
	// GETTER & SETTER FOR THE KEY FIELD
	// ----------------------------------------------------------------------
	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getId() {
		return this.id;
	}

	// ----------------------------------------------------------------------
	// GETTERS & SETTERS FOR FIELDS
	// ----------------------------------------------------------------------
	// --- DATABASE MAPPING : isoCode ( TEXT )
	public void setIsocode(String isocode) {
		this.isocode = isocode;
	}

	public String getIsocode() {
		return this.isocode;
	}

	// --- DATABASE MAPPING : isoSymbol ( TEXT )
	public void setIsosymbol(String isosymbol) {
		this.isosymbol = isosymbol;
	}

	public String getIsosymbol() {
		return this.isosymbol;
	}

	// ----------------------------------------------------------------------
	// GETTERS & SETTERS FOR LINKS
	// ----------------------------------------------------------------------
	public void setListOfConnections(List<ConnectionsEntity> listOfConnections) {
		this.listOfConnections = listOfConnections;
	}

	public List<ConnectionsEntity> getListOfConnections() {
		return this.listOfConnections;
	}

	public String getCurrency() {
		return currency;
	}

	public void setCurrency(String currency) {
		this.currency = currency;
	}

	public String getThousandsSeparator() {
		return thousandsSeparator;
	}

	public void setThousandsSeparator(String thousandsSeparator) {
		this.thousandsSeparator = thousandsSeparator;
	}

	public String getDecimalSeparator() {
		return decimalSeparator;
	}

	public void setDecimalSeparator(String decimalSeparator) {
		this.decimalSeparator = decimalSeparator;
	}

	public List<PricepointplanEntity> getListOfPricepointplan() {
		return listOfPricepointplan;
	}

	public void setListOfPricepointplan(List<PricepointplanEntity> listOfPricepointplan) {
		this.listOfPricepointplan = listOfPricepointplan;
	}

	@Override
	public String toString() {
		return "CurrenciesEntity [id=" + id + ", currency=" + currency + ", isocode=" + isocode + ", isosymbol="
				+ isosymbol + ", thousandsSeparator=" + thousandsSeparator + ", decimalSeparator=" + decimalSeparator
				+ ", listOfConnections=" + listOfConnections + "]";
	}

}
