<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of firma
 *
 * @author Arth
 * 
 * Adds Logical to the Class
 * @since 30.07.2016
 * @author Lukas
 */
class pm_firma {

    private $id;
    private $name;
    private $leitung;

    public function getId() {
        return $this->id;
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

    public function setName($name) {
        $this->name = $name;
    }

    public function setLeitung($leitung) {
        $this->leitung = $leitung;
    }

}
