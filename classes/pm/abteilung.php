<?php

/**
 * Description of bereich
 *
 * @author Arth
 * 
 * Add the specific Coding Guidelines
 * @since 24.07.2016
 * @author Lukas
 */
class pm_abteilung {

    /**
     * Database ID
     * @var int 
     */
    private $i_id;
    
    /**
     * Location String
     * @var String 
     */
    private $s_location;
    
    /**
     * Name of a String
     * @var String 
     */
    private $s_name;
    
    /**
     * Leader of the Department
     * @var int 
     */
    private $id_leader;

    /**
     * Gets the Database ID
     * @return int
     */
    public function getId() {
        return $this->i_id;
    }

    /**
     * Gets the Location
     * @return String
     */
    public function getLocation() {
        return $this->s_location;
    }

    /**
     * Returns the Name
     * @return String
     */
    public function getName() {
        return $this->s_name;
    }

    /**
     * Returns the Leader ID
     * @return int
     */
    public function getLeader() {
        return $this->id_leader;
    }

    /**
     * Sets the Database ID of a Department
     * @param int $id
     */
    public function setId($id) {
        $this->i_id = $id;
    }

    /**
     * Sets the Location ID
     * @param int $standort
     */
    public function setLocation($standort) {
        $this->s_location = $standort;
    }

    /**
     * Sets the Name 
     * @param String $name
     */
    public function setName($name) {
        $this->s_name = $name;
    }

    /**
     * Sets the Leader
     * @param int $leitung
     */
    public function setLeader($leitung) {
        $this->id_leader = $leitung;
    }

}
