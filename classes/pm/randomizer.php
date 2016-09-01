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
    
    
    function __construct() {
        $this->s_filePath = "bin/custom/images/";
    }
    
    public function getPicture($id, $name){
        $this->s_randomizerString = $name;
        $i = $id%5;
        $this->s_pictureName = $this->s_randomizerString.$i.".png";
        return $this->s_filePath.$this->s_pictureName;
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
