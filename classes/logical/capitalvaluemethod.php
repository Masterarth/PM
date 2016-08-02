<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Implements the Capital Value Method
 * 
 * @author Lukas Adler
 */
class capitalvaluemethod {
    
    
    private $d_capitalValue;
    private $d_payingOut;
    private $i_years;
    private $o_inflation;
    private $o_capitalflows = array();
   
    /**
     * Constructor which calculates the Capital Value Method
     * @param int $i_years
     * @param double $d_payoutMoney
     */
    function __construct($i_years, $d_payoutMoney) {
        $this->o_inflation = new inflation();
        $this->i_years = $i_years;
        $this->d_payingOut = $d_payoutMoney;
    }
    
    /**
     * Calculates the Capital Value
     */
    public function calculateCapitalValue()
    {
        $this->d_capitalValue = (-1)*$this->d_payingOut;
        foreach ($this->o_capitalflows as $arrElem)
        {
            $this->yearsCapitalValues($arrElem);
        }
    }
    
    /**
     * This Method Calculates a Special Kapital Flow Year Unit
     * @param CapitalFlow $arrElem
     * @return int Capital Value for a Year
     */
    public function yearsCapitalValues($arrElem)
    {
        if(is_a($arrElem, capitalflow::class))
        {
            
        }
        return 0;
    }
    
    /**
     * Returns the Capital Value Method
     * @return double Capital Value
     */
    public function getCapitalValue()
    {
        return $this->d_capitalValue;
    }
    
    
}
