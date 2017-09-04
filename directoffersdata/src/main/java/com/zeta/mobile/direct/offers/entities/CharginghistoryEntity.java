/*
 * Created on 1 Sep 2017 ( Time 15:57:06 )
 * Generated by Telosys Tools Generator ( version 2.1.1 )
 */
// This Bean has a basic Primary Key (not composite) 

package com.zeta.mobile.direct.offers.entities;

import java.io.Serializable;

//import javax.validation.constraints.* ;
//import org.hibernate.validator.constraints.* ;


import javax.persistence.*;

/**
 * Persistent class for entity stored in table "charginghistory"
 *
 * @author Telosys Tools Generator
 *
 */

@Entity
@Table(name="charginghistory", catalog="directoffers" )
// Define named queries here
@NamedQueries ( {
  @NamedQuery ( name="CharginghistoryEntity.countAll", query="SELECT COUNT(x) FROM CharginghistoryEntity x" )
} )
public class CharginghistoryEntity implements Serializable {

    private static final long serialVersionUID = 1L;

    //----------------------------------------------------------------------
    // ENTITY PRIMARY KEY ( BASED ON A SINGLE FIELD )
    //----------------------------------------------------------------------
    @Id
    @GeneratedValue(strategy=GenerationType.AUTO)
    @Column(name="id", nullable=false)
    private Integer    id           ;


    //----------------------------------------------------------------------
    // ENTITY DATA FIELDS 
    //----------------------------------------------------------------------    
    @Column(name="status", length=45)
    private String     status       ;

    @Column(name="impressionId", nullable=false)
    private Integer    impressionid ;

    @Column(name="externalId")
    private Integer    externalid   ;

    @Column(name="paymentType", nullable=false)
    private String     paymenttype  ;



    //----------------------------------------------------------------------
    // ENTITY LINKS ( RELATIONSHIP )
    //----------------------------------------------------------------------

    //----------------------------------------------------------------------
    // CONSTRUCTOR(S)
    //----------------------------------------------------------------------
    public CharginghistoryEntity() {
		super();
    }
    
    //----------------------------------------------------------------------
    // GETTER & SETTER FOR THE KEY FIELD
    //----------------------------------------------------------------------
    public void setId( Integer id ) {
        this.id = id ;
    }
    public Integer getId() {
        return this.id;
    }

    //----------------------------------------------------------------------
    // GETTERS & SETTERS FOR FIELDS
    //----------------------------------------------------------------------
    //--- DATABASE MAPPING : status ( VARCHAR ) 
    public void setStatus( String status ) {
        this.status = status;
    }
    public String getStatus() {
        return this.status;
    }

    //--- DATABASE MAPPING : impressionId ( INT ) 
    public void setImpressionid( Integer impressionid ) {
        this.impressionid = impressionid;
    }
    public Integer getImpressionid() {
        return this.impressionid;
    }

    //--- DATABASE MAPPING : externalId ( INT ) 
    public void setExternalid( Integer externalid ) {
        this.externalid = externalid;
    }
    public Integer getExternalid() {
        return this.externalid;
    }

    //--- DATABASE MAPPING : paymentType ( TEXT ) 
    public void setPaymenttype( String paymenttype ) {
        this.paymenttype = paymenttype;
    }
    public String getPaymenttype() {
        return this.paymenttype;
    }


    //----------------------------------------------------------------------
    // GETTERS & SETTERS FOR LINKS
    //----------------------------------------------------------------------

    //----------------------------------------------------------------------
    // toString METHOD
    //----------------------------------------------------------------------
    public String toString() { 
        StringBuffer sb = new StringBuffer(); 
        sb.append("["); 
        sb.append(id);
        sb.append("]:"); 
        sb.append(status);
        sb.append("|");
        sb.append(impressionid);
        sb.append("|");
        sb.append(externalid);
        // attribute 'paymenttype' not usable (type = String Long Text)
        return sb.toString(); 
    } 

}
