/*
 * Created on 1 Sep 2017 ( Time 15:57:06 )
 * Generated by Telosys Tools Generator ( version 2.1.1 )
 */
// This Bean has a basic Primary Key (not composite) 

package com.zeta.mobile.direct.offers.entities;

import java.io.Serializable;

//import javax.validation.constraints.* ;
//import org.hibernate.validator.constraints.* ;

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

/**
 * Persistent class for entity stored in table "campaignoffers"
 *
 * @author Telosys Tools Generator
 *
 */

@Entity
@Table(name = "campaignoffers", catalog = "directoffers")
// Define named queries here
@NamedQueries({
		@NamedQuery(name = "CampaignoffersEntity.countAll", query = "SELECT COUNT(x) FROM CampaignoffersEntity x") })
public class CampaignoffersEntity implements Serializable {

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
	@Column(name = "externalId", nullable = false)
	private Integer externalid;

	@Column(name = "name", nullable = false)
	private String name;

	@Column(name = "preJumpUrl")
	private String prejumpurl;

	@Column(name = "jumpUrl", nullable = false)
	private String jumpurl;

	@Column(name = "createdBy", nullable = false)
	private String createdby;

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "creationDate", nullable = false)
	private Date creationdate;

	@Column(name = "editedBy")
	private String editedby;

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "editionDate")
	private Date editiondate;

	// "campaignid" (column "campaignId") is not defined by itself because used as
	// FK in a link
	// "pricepointplanid" (column "pricePointPlanId") is not defined by itself
	// because used as FK in a link

	// ----------------------------------------------------------------------
	// ENTITY LINKS ( RELATIONSHIP )
	// ----------------------------------------------------------------------
	@ManyToOne
	@JoinColumn(name = "pricePointPlanId", referencedColumnName = "id")
	@JsonManagedReference
	private PricepointplanEntity pricepointplan;

	@ManyToOne
	@JoinColumn(name = "campaignId", referencedColumnName = "id")
	@JsonManagedReference
	private CampaignsEntity campaigns;

	@OneToMany(mappedBy = "campaignoffers", targetEntity = ImpressionsEntity.class)
	@JsonBackReference
	private List<ImpressionsEntity> listOfImpressions;

	// ----------------------------------------------------------------------
	// CONSTRUCTOR(S)
	// ----------------------------------------------------------------------
	public CampaignoffersEntity() {
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
	// --- DATABASE MAPPING : externalId ( INT )
	public void setExternalid(Integer externalid) {
		this.externalid = externalid;
	}

	public Integer getExternalid() {
		return this.externalid;
	}

	// --- DATABASE MAPPING : name ( TEXT )
	public void setName(String name) {
		this.name = name;
	}

	public String getName() {
		return this.name;
	}

	// --- DATABASE MAPPING : preJumpUrl ( TEXT )
	public void setPrejumpurl(String prejumpurl) {
		this.prejumpurl = prejumpurl;
	}

	public String getPrejumpurl() {
		return this.prejumpurl;
	}

	// --- DATABASE MAPPING : jumpUrl ( TEXT )
	public void setJumpurl(String jumpurl) {
		this.jumpurl = jumpurl;
	}

	public String getJumpurl() {
		return this.jumpurl;
	}

	// --- DATABASE MAPPING : createdBy ( TEXT )
	public void setCreatedby(String createdby) {
		this.createdby = createdby;
	}

	public String getCreatedby() {
		return this.createdby;
	}

	// --- DATABASE MAPPING : creationDate ( TIMESTAMP )
	public void setCreationdate(Date creationdate) {
		this.creationdate = creationdate;
	}

	public Date getCreationdate() {
		return this.creationdate;
	}

	// --- DATABASE MAPPING : editedBy ( TEXT )
	public void setEditedby(String editedby) {
		this.editedby = editedby;
	}

	public String getEditedby() {
		return this.editedby;
	}

	// --- DATABASE MAPPING : editionDate ( TIMESTAMP )
	public void setEditiondate(Date editiondate) {
		this.editiondate = editiondate;
	}

	public Date getEditiondate() {
		return this.editiondate;
	}

	// ----------------------------------------------------------------------
	// GETTERS & SETTERS FOR LINKS
	// ----------------------------------------------------------------------
	public void setPricepointplan(PricepointplanEntity pricepointplan) {
		this.pricepointplan = pricepointplan;
	}

	public PricepointplanEntity getPricepointplan() {
		return this.pricepointplan;
	}

	public void setCampaigns(CampaignsEntity campaigns) {
		this.campaigns = campaigns;
	}

	public CampaignsEntity getCampaigns() {
		return this.campaigns;
	}

	public void setListOfImpressions(List<ImpressionsEntity> listOfImpressions) {
		this.listOfImpressions = listOfImpressions;
	}

	public List<ImpressionsEntity> getListOfImpressions() {
		return this.listOfImpressions;
	}

	// ----------------------------------------------------------------------
	// toString METHOD
	// ----------------------------------------------------------------------
	@Override
	public String toString() {
		StringBuffer sb = new StringBuffer();
		sb.append("[");
		sb.append(id);
		sb.append("]:");
		sb.append(externalid);
		// attribute 'name' not usable (type = String Long Text)
		// attribute 'prejumpurl' not usable (type = String Long Text)
		// attribute 'jumpurl' not usable (type = String Long Text)
		// attribute 'createdby' not usable (type = String Long Text)
		sb.append("|");
		sb.append(creationdate);
		// attribute 'editedby' not usable (type = String Long Text)
		sb.append("|");
		sb.append(editiondate);
		return sb.toString();
	}

}
