<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Arth
 */
class pm_user {

    private $id;
    private $u_id;
    private $l_name;
    private $vorname;
    private $nachname;
    private $b_id;
    private $abteil;
    private $reg_datum;
    private $aktiv;

    function getId() {
        return $this->id;
    }

    function getU_id() {
        return $this->u_id;
    }

    function getL_name() {
        return $this->l_name;
    }

    function getVorname() {
        return $this->vorname;
    }

    function getNachname() {
        return $this->nachname;
    }

    function getB_id() {
        return $this->b_id;
    }

    function getAbteil() {
        return $this->abteil;
    }

    function getReg_datum() {
        return $this->reg_datum;
    }

    function getAktiv() {
        return $this->aktiv;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setU_id($u_id) {
        $this->u_id = $u_id;
    }

    function setL_name($l_name) {
        $this->l_name = $l_name;
    }

    function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    function setB_id($b_id) {
        $this->b_id = $b_id;
    }

    function setAbteil($abteil) {
        $this->abteil = $abteil;
    }

    function setReg_datum($reg_datum) {
        $this->reg_datum = $reg_datum;
    }

    function setAktiv($aktiv) {
        $this->aktiv = $aktiv;
    }

}
