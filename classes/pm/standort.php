<?php

/**
 * Description of standort
 *
 * @author Arth
 */
class pm_standort {

    private $id;
    private $name;
    private $strasse;
    private $hausnummer;
    private $plz;
    private $ort;
    private $leitung;
    private $firma;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getStrasse() {
        return $this->strasse;
    }

    public function getHausnummer() {
        return $this->hausnummer;
    }

    public function getPlz() {
        return $this->plz;
    }

    public function getOrt() {
        return $this->ort;
    }

    public function getLeitung() {
        return $this->leitung;
    }

    public function getFirma() {
        return $this->firma;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setStrasse($strasse) {
        $this->strasse = $strasse;
    }

    public function setHausnummer($hausnummer) {
        $this->hausnummer = $hausnummer;
    }

    public function setPlz($plz) {
        $this->plz = $plz;
    }

    public function setOrt($ort) {
        $this->ort = $ort;
    }

    public function setLeitung($leitung) {
        $this->leitung = $leitung;
    }

    public function setFirma($firma) {
        $this->firma = $firma;
    }

}
