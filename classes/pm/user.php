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
    private $i_u_id;
    private $s_l_name;
    private $vorname;
    private $nachname;
    private $b_id;
    private $t_id;
    private $reg_datum;
    private $aktiv;

    public function getId() {
        return $this->i_id;
    }

    public function getU_id() {
        return $this->i_u_id;
    }

    public function getL_name() {
        return $this->s_l_name;
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

    public function getT_id() {
        return $this->t_id;
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
        $this->i_u_id = $u_id;
    }

    public function setL_name($l_name) {
        $this->s_l_name = $l_name;
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

    public function setT_id($t_id) {
        $this->t_id = $t_id;
    }

    public function setReg_datum($reg_datum) {
        $this->reg_datum = $reg_datum;
    }

    public function setAktiv($aktiv) {
        $this->aktiv = $aktiv;
    }

}
