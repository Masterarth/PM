<?php


/**
 * Description of standort
 *
 * @author Arth
 */
class pm_standort {

    private $id;
    private $name;
    private $adresse;
    private $firma_id;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getFirma_id() {
        return $this->firma_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setFirma_id($firma_id) {
        $this->firma_id = $firma_id;
    }




}
