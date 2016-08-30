<?php

/**
 * PM Class which handels all the Functions and Variables
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
class pm_projekt {

    private $id;
    private $mitarbeiteranzahl;
    private $budget;
    private $title;
    private $endtermin;
    private $starttermin;
    private $beschreibung;
    private $nutzen;
    private $projektstatus = array();
    private $bereich_id;
    private $mitarbeiter = array();
    private $leiter = array();
    private $ersteller;

    public function __construct($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function getErsteller() {
        return $this->ersteller;
    }

    public function getBereich_id() {
        return $this->bereich_id;
    }

    public function getLeiter() {
        return $this->leiter;
    }

    public function getProjektstatus() {
        return $this->projektstatus;
    }

    public function getMitarbeiter() {
        return $this->mitarbeiter;
    }

    function getMitarbeiteranzahl() {
        return $this->mitarbeiteranzahl;
    }

    function getBudget() {
        return $this->budget;
    }

    function getTitle() {
        return $this->title;
    }

    function getEndtermin() {
        return $this->endtermin;
    }

    function getStarttermin() {
        return $this->starttermin;
    }

    function getBeschreibung() {
        return $this->beschreibung;
    }

    function getNutzen() {
        return $this->nutzen;
    }

    public function setMitarbeiter($user) {
        $this->mitarbeiter[] = $user;
    }

    public function setBereich_id($bereich_id) {
        $this->bereich_id = $bereich_id;
    }

    public function setErsteller($user) {
        $this->ersteller = $user;
    }

    public function setLeiter($user) {
        $this->leiter = $user;
    }

    public function setProjektstatus($projektstatus) {
        $this->projektstatus[] = $projektstatus;
    }

    function setMitarbeiteranzahl($mitarbeiteranzahl) {
        $this->mitarbeiteranzahl = $mitarbeiteranzahl;
    }

    function setBudget($budget) {
        $this->budget = $budget;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setEndtermin($endtermin) {
        $this->endtermin = $endtermin;
    }

    function setStarttermin($starttermin) {
        $this->starttermin = $starttermin;
    }

    function setBeschreibung($beschreibung) {
        $this->beschreibung = $beschreibung;
    }

    function setNutzen($nutzen) {
        $this->nutzen = $nutzen;
    }

}
