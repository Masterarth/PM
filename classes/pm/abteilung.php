<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

    /**
     * ID of the Section
     * @var int 
     */
    private $i_id;
    
    /**
     * Number of Employees
     * @var ing 
     */
    private $i_mitarbeiteranzahl;
    
    /**
     * Budget of the Section
     * @var double 
     */
    private $d_budget;
    
    /**
     * Name of the Section
     * @var string 
     */
    private $s_name;
    
    /**
     * ID of the Location of the Section
     * @var int 
     */
    private $i_standort_id;
    
    /**
     * Sets the ID of the Section
     * @param int ID
     */
    public function setId($i_id)
    {
        $this->i_id = $i_id;
    }
    
    /**
     * Sets the Number of Employees of the Section
     * @param int Anzahl Mitarbeiter
     */
    public function setEmployeeNumber($i_zahl)
    {
        $this->i_mitarbeiteranzahl = $i_zahl;
    }
    
    /**
     * Sets the Name of the Section
     * @param string Name
     */
    public function setName($s_abteilungsName)
    {
        $this->s_name = $s_abteilungsName;
    }
    
    /**
     * Sets the Budget of a Section
     * @param double $d_budget
     */
    public function setBudget($d_budget)
    {
        $this->d_budget = $d_budget;
    }
    
    /**
     * Sets the ID of the Location of the Section
     * @param int BereichsID
     */
    public function setLocationId($i_standortID)
    {
        $this->i_standort_id = $i_standortID;
    }
    
    /**
     * Returns the Section ID
     * @return int ID
     */
    public function getId()
    {
        return $this->i_id;
    }
    
    /**
     * Returns the Budget Values
     * @return double Budget
     */
    public function getBudget()
    {
        return $this->d_budget;
    }
    
    /**
     * Returns Number of Employees
     * @return int Number of Employees
     */
    public function getMitarbeiterZahl()
    {
        return $this->i_mitarbeiteranzahl;
    }
    
    /**
     * Returns the Name of the Section
     * @return string Name
     */
    public function getName()
    {
        return $this->s_name;
    }
    
    /**
     * Returns the Location ID of the Section
     * @return int Location ID
     */
    public function getLocationId()
    {
        return $this->i_standort_id;
    }

}
