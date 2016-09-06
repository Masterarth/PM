<?php

/**
 * Description of standort
 *
 * @author Arth
 * 
 * Adding Codeing Guidelines and other Stuff
 * @since 06.09.2016
 * @author Lukas Adler
 */
class pm_standort {

    /**
     * ID of a Location
     * @var int 
     */
    private $i_id;
    
    /**
     * Name of a Location
     * @var String 
     */
    private $s_name;
    
    /**
     * Street of the Location
     * @var String 
     */
    private $s_street;
    
    /**
     * House Number of the Location
     * @var int 
     */
    private $i_houseNumber;
    
    /**
     * Postal Code of the Location
     * @var int 
     */
    private $i_postalcode;
    
    /**
     * City of the Location
     * @var String 
     */
    private $s_city;
    
    /**
     * ID of the Leader of a Location
     * @var type 
     */
    private $id_leader;
    
    /**
     * Name of the Company
     * @var String 
     */
    private $id_company;

    /**
     * Get Database ID
     * @return int
     */
    public function getId() {
        return $this->i_id;
    }

    /**
     * Get Name of the Location
     * @return String
     */
    public function getName() {
        return $this->s_name;
    }

    /**
     * Get Street of the Location
     * @return String
     */
    public function getStreet() {
        return $this->s_street;
    }

    /**
     * Get House Number of a Location
     * @return int
     */
    public function getHouseNumber() {
        return $this->i_houseNumber;
    }

    /**
     * Get Postal Code of a Location
     * @return int
     */
    public function getPostalCode() {
        return $this->i_postalcode;
    }

    /**
     * Get Village of a Location
     * @return String
     */
    public function getPlace() {
        return $this->s_city;
    }

    /**
     * Get ID of the Leader of a Location
     * @return int
     */
    public function getLeader() {
        return $this->id_leader;
    }
    
    /**
     * Gets Database ID of the Company
     * @return int
     */
    public function getCompany() {
        return $this->id_company;
    }

    /**
     * Sets Database ID
     * @param int $id
     */
    public function setId($id) {
        $this->i_id = $id;
    }

    /**
     * Sets Name 
     * @param String $name
     */
    public function setName($name) {
        $this->s_name = $name;
    }

    /**
     * Sets Name
     * @param String $strasse
     */
    public function setStreet($strasse) {
        $this->s_street = $strasse;
    }

    /**
     * Sets House Number
     * @param int $hausnummer
     */
    public function setHouseNumber($hausnummer) {
        $this->i_houseNumber = $hausnummer;
    }

    /**
     * Sets Postal Code
     * @param int $plz
     */
    public function setPostalCode($plz) {
        $this->i_postalcode = $plz;
    }

    /**
     * Sets the Place of a Location
     * @param String $ort
     */
    public function setPlace($ort) {
        $this->s_city = $ort;
    }

    /**
     * Sets the Leader ID 
     * @param int $leitung
     */
    public function setLeader($leitung) {
        $this->id_leader = $leitung;
    }

    /**
     * Sets the Company ID
     * @param int $firma
     */
    public function setCompany($firma) {
        $this->id_company = $firma;
    }

}
