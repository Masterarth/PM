<?php

/**
 * Implements the Capital Value Method
 * 
 * @author Lukas Adler
 */
class pm_capitalvaluemethod {

    /**
     * Capital Value
     * @var double 
     */
    private $d_capitalValue;

    /**
     * Money Output
     * @var double 
     */
    private $d_payingOut;

    /**
     * How many Years?
     * @var int 
     */
    private $i_years;

    /**
     * Zins for the Risk
     * @var it 
     */
    private $i_riskZins;

    /**
     * Empty Risk Zins
     * @var int 
     */
    private $i_emptyRiskZins;

    /**
     * Inflation Object
     * @var PM_Inflation 
     */
    private $o_inflation;

    /**
     * Capital Flows
     * @var Array 
     */
    private $o_capitalflows = array();

    /**
     * Constructor which calculates the Capital Value Method
     * @param int $i_years
     * @param double $d_payoutMoney
     */
    function __construct($i_years, $i_emptyRiskZins, $i_riskZins, $d_payoutMoney, $o_arrayCapitalflow) {

        if (is_nan($i_years)) {
            throw new InvalidArgumentException('Params must be an Number Value');
        }

        $this->o_inflation = new pm_inflation(date("Y"));
        $this->i_years = $i_years;
        $this->d_payingOut = $d_payoutMoney;
        $this->i_emptyRiskZins = $i_emptyRiskZins;
        $this->i_riskZins = $i_riskZins;
        $this->o_capitalflows = $o_arrayCapitalflow;
    }

    /**
     * Calculates the Capital Value
     */
    public function calculateCapitalValue() {
        $this->d_capitalValue = (-1) * $this->d_payingOut;
        $d_zins = 1 + $this->o_inflation->getInflationRate() + $this->i_emptyRiskZins + $this->i_riskZins;

        foreach ($this->o_capitalflows as $arrElem) {
            if (is_a($arrElem, pm_capitalflow::class)) {
                $this->d_capitalValue += $this->yearsCapitalValues($arrElem, $d_zins);
            }
        }
        return $this->d_capitalValue;
    }

    /**
     * This Method Calculates a Special Kapital Flow Year Unit
     * @param CapitalFlow $arrElem
     * @return int Capital Value for a Year
     */
    public function yearsCapitalValues($arrElem, $d_zins) {
        if (is_a($arrElem, pm_capitalflow::class)) {
            $val = ($arrElem->getInputCash() - $arrElem->getOutputCash()) / (pow($d_zins, $arrElem->getYear() + 1));
            return $val;
        }
        return 0;
    }

    /**
     * Returns the Capital Value Method
     * @return double Capital Value
     */
    public function getCapitalValue() {
        return $this->d_capitalValue;
    }

    /**
     * Get the Capital Flows (Array)
     * @return Array Capital Flow
     */
    function getO_capitalflows() {
        return $this->o_capitalflows;
    }

}
