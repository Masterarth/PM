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
    private $s_id;
    private $a_name;
    private $a_leitung;
    
    public function getId() {
        return $this->id;
    }

    public function getS_id() {
        return $this->s_id;
    }

    public function getA_name() {
        return $this->a_name;
    }

    public function getA_leitung() {
        return $this->a_leitung;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setS_id($s_id) {
        $this->s_id = $s_id;
    }

    public function setA_name($a_name) {
        $this->a_name = $a_name;
    }

    public function setA_leitung($a_leitung) {
        $this->a_leitung = $a_leitung;
    }



}
