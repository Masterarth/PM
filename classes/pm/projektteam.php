<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Project Team 
 *
 * @author Lukas Adler
 */
class pm_projektteam {
    
    /**
     * Database Team ID
     * @var int 
     */
    private $i_teamId;
    
    /**
     * Database Project ID
     * @var int 
     */
    private $i_projectId;
    
    /**
     * Database ID of the Projectteam
     * @var int 
     */
    private $i_databaseId;
    
    /**
     * Hours of the Projectteam for a Project
     * @var int 
     */
    private $i_hours;
    
    /**
     * Name of the Project
     * @var String 
     */
    private $s_projectName;
    
    /**
     * Name of the Team
     * @var String 
     */
    private $s_teamName;
    
    /**
     * Creats a Involved Team Object for a Project
     */
    function __construct() {
        
    }
    
    /**
     * Returns Database Team ID
     * @return int
     */
    function getTeamId() {
        return $this->i_teamId;
    }

    /**
     * Returns Database Project ID
     * @return int
     */
    function getProjectId() {
        return $this->i_projectId;
    }

    /**
     * Returns Database ID from the ProjectInvolved Team Value
     * @return int
     */
    function getDatabaseId() {
        return $this->i_databaseId;
    }

    /**
     * Returns Hours for the Project of a Team
     * @return int
     */
    function getHours() {
        return $this->i_hours;
    }

    /**
     * Returns the Project Name
     * @return String
     */
    function getProjectName() {
        return $this->s_projectName;
    }

    /**
     * Returns the Team Name
     * @return String
     */
    function getTeamName() {
        return $this->s_teamName;
    }
    
    /**
     * Returns an Array
     * @param int $p_id
     * @return array Val
     */
    public function getArray($p_id)
    {
        $array = array();
        $array['abteilung'] = $this->getTeamId();
        $array['p_id'] = $p_id;
        $array['wert'] = $this->getHours();
        return $array;
    }

    /**
     * Sets the Team ID
     * @param int $i_teamId
     */
    function setTeamId($i_teamId) {
        $this->i_teamId = $i_teamId;
    }

    /**
     * Sets the Project ID
     * @param int $i_projectId
     */
    function setProjectId($i_projectId) {
        $this->i_projectId = $i_projectId;
    }

    /**
     * Sets the Database ID
     * @param int $i_databaseId
     */
    function setDatabaseId($i_databaseId) {
        $this->i_databaseId = $i_databaseId;
    }

    /**
     * Sets the Hours for a Team
     * @param type $i_hours
     */
    function setHours($i_hours) {
        $this->i_hours = $i_hours;
    }

    /**
     * Sets the Project Name
     * @param String $s_projectName
     */
    function setProjectName($s_projectName) {
        $this->s_projectName = $s_projectName;
    }

    /**
     * Sets the Team Name
     * @param String $s_teamName
     */
    function setTeamName($s_teamName) {
        $this->s_teamName = $s_teamName;
    }

}
