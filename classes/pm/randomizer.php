<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Adds a randomizer for the Pictures
 * It depends on the Project, Team, ... ID
 *
 * @author Lukas Adler
 */
class pm_randomizer {

    /**
     * Singelton Pattern
     * @var Object
     */
    static private $instance = null;

    /**
     * Singelton Pattern
     * @return Object
     */
    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Singelton Pattern
     */
    private function __clone() {
        
    }

    /**
     * For which Basic Informations
     * @var String 
     */
    private $s_randomizerString;

    /**
     * Path to the Picture
     * @var String 
     */
    private $s_filePath;

    /**
     * Name of the Picture
     * @var String 
     */
    private $s_pictureName;

    /**
     * Standard Constructor
     */
    function __construct() {
        $this->s_filePath = "/pm/bin/custom/images/";
    }

    /**
     * Returns a Picture
     * @param int $id
     * @param String $name ("projekt"/"mitarbeiter"/"budget"/"abteilung"/"standort"/"team");
     * @return type
     */
    public function getPicture($id, $name) {
        $this->s_randomizerString = $name;
        $i = $id % 5;
        $this->s_pictureName = $this->s_randomizerString . "_" . $i . ".jpg";
        return $this->s_filePath . $this->s_pictureName;
    }

    function getS_randomizerString() {
        return $this->s_randomizerString;
    }

    function getS_filePath() {
        return $this->s_filePath;
    }

    function getS_pictureName() {
        return $this->s_pictureName;
    }

    function setS_randomizerString(String $s_randomizerString) {
        $this->s_randomizerString = $s_randomizerString;
    }

    function setS_filePath(String $s_filePath) {
        $this->s_filePath = $s_filePath;
    }

    function setS_pictureName(String $s_pictureName) {
        $this->s_pictureName = $s_pictureName;
    }

}
