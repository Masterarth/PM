<?php
    
    $capiFlow1 = new pm_capitalflow(1, 200, 50);
    $capiFlow2 = new pm_capitalflow(2, 150, 30);
    
    $arr = array();
    $arr[0] = $capiFlow1;
    $arr[1] = $capiFlow2;

    $capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$arr);

/**
 * Implements the Capital Value Method
 * 
 * @author Lukas Adler
 */
class pm_capitalvaluemethod {
    
    
    private $d_capitalValue;
    private $d_payingOut;
    private $i_years;
    private $i_riskZins;
    private $i_emptyRiskZins;
    private $o_inflation;
    private $o_capitalflows = array();
   
    /**
     * Constructor which calculates the Capital Value Method
     * @param int $i_years
     * @param double $d_payoutMoney
     */
    function __construct($i_years,$i_emptyRiskZins, $i_riskZins, $d_payoutMoney, $o_arrayCapitalflow) {
        $this->o_inflation = new inflation(2016);
        $this->i_years = $i_years;
        $this->d_payingOut = $d_payoutMoney;
        $this->i_emptyRiskZins = $i_emptyRiskZins;
        $this->i_riskZins = $i_riskZins;
        $this->o_capitalflows = $o_arrayCapitalflow;
        
        var_dump($o_arrayCapitalflow);
        
    }
    
    /**
     * Calculates the Capital Value
     */
    public function calculateCapitalValue()
    {
        $this->d_capitalValue = (-1)*$this->d_payingOut;
        $d_zins = 1+$this->o_inflation+$this->i_emptyRiskZins+$this->i_riskZins;
        foreach ($this->o_capitalflows as $arrElem)
        {
            if(is_a($arrElem, capitalflow::class)){
                $val = ($arrElem->d_inputCash-$arrElem->d_outputCash)/(($d_zins)^$arrElem->i_year);
                $this->d_capitalValue += $val;
            }
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
