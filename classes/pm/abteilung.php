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

    private $id;
    private $standort;
    private $name;
    private $leitung;

    public function getId() {
        return $this->id;
    }

    public function getStandort() {
        return $this->standort;
    }

    public function getName() {
        return $this->name;
    }

    public function getLeitung() {
        return $this->leitung;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setStandort($standort) {
        $this->standort = $standort;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLeitung($leitung) {
        $this->leitung = $leitung;
    }

}
