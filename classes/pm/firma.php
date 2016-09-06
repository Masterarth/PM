<?php

/**
 * Adds Logical to the Class
 * @since 30.07.2016
 * @author Lukas
 */
class pm_firma {

    /**
     * Database ID of a Company
     * @var int 
     */
    private $i_id;
    
    /**
     * Name of a Company
     * @var String 
     */
    private $s_name;
    
    /**
     * Database ID of the Leader of a Company
     * @var int 
     */
    private $id_leader;

    /**
     * Returns the Database ID
     * @return int
     */
    public function getId() {
        return $this->i_id;
    }

    /**
     * Returns the Name
     * @return String
     */
    public function getName() {
        return $this->s_name;
    }

    /**
     * Returns the Leader
     * @return int
     */
    public function getLeader() {
        return $this->id_leader;
    }

    /**
     * Sets the Database ID
     * @param int $id
     */
    public function setId($id) {
        $this->i_id = $id;
    }

    /**
     * Sets the Name of a Company
     * @param String $name
     */
    public function setName($name) {
        $this->s_name = $name;
    }

    /**
     * Sets the Leader of a Company
     * @param Leader ID $leitung
     */
    public function setLeader($leitung) {
        $this->id_leader = $leitung;
    }

}
