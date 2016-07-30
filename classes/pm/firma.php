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

    /**
     * ID of the Company
     * @var int ID
     */
    private $i_id;
    
    /**
     * Name of the Company
     * @var string Name 
     */
    private $s_name;
    
    /**
     * Budget of the Company
     * @var double Budget 
     */
    private $d_budget;
    
    /**
     * Sets the Id of the Company
     * @param int $i_id
     */
    public function setId($i_id)
    {
        $this->i_id = $i_id;
    }
    
    /**
     * Sets the Name of the Company
     * @param string $s_name
     */
    public function setName($s_name)
    {
        $this->s_name = $s_name;
    }
    
    /**
     * Sets the Budget of the Company for Projects
     * @param double $d_budget
     */
    public function setBudget($d_budget)
    {
        $this->d_budget = $d_budget;
    }
    
    /**
     * Returns the ID of the Company
     * @return int ID
     */
    public function getId()
    {
        return $this->i_id;
    }
    
    /**
     * Returns the Name of the Company
     * @return string Name
     */
    public function getName()
    {
        return $this->s_name;
    }
    
    /**
     * Returns the Budget of the Company
     * @return double Budget
     */
    public function getBudget()
    {
        return $this->d_budget;
    }

}
