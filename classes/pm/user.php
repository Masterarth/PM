<?php

/**
 * Description of user
 *
 * @author Arth
 * 
 * Changeing Structe
 * @since 30.07.2016
 * @author Lukas
 */
class pm_user {

    /**
     * ID of the User
     * @var int 
     */
    private $i_id;
    private $u_id;
    private $l_name;
    private $vorname;
    private $nachname;
    private $b_id;
    private $r_id;
    private $reg_datum;
    private $aktiv;
    private $rolle;

    public function getId() {
        return $this->i_id;
    }

    public function getU_id() {
        return $this->u_id;
    }

    public function getL_name() {
        return $this->l_name;
    }

    public function getVorname() {
        return $this->vorname;
    }

    public function getNachname() {
        return $this->nachname;
    }

    public function getB_id() {
        return $this->b_id;
    }

    public function getReg_datum() {
        return $this->reg_datum;
    }

    public function isAktiv() {
        return $this->aktiv;
    }

    public function setId($id) {
        $this->i_id = $id;
    }

    public function setU_id($u_id) {
        $this->u_id = $u_id;
    }

    public function setL_name($l_name) {
        $this->l_name = $l_name;
    }

    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    public function setB_id($b_id) {
        $this->b_id = $b_id;
    }

    public function setReg_datum($reg_datum) {
        $this->reg_datum = $reg_datum;
    }

    public function setAktiv($aktiv) {
        $this->aktiv = $aktiv;
    }

    function getR_id() {
        return $this->r_id;
    }

    function getRolle() {
        return $this->rolle;
    }

    function setR_id($r_id) {
        $this->r_id = $r_id;
    }

    function setRolle($rolle) {
        $this->rolle = $rolle;
    }

}
