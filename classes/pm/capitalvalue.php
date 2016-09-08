<?php

/**
 * Description of capitalvalue
 *
 * @author Lukas Adler
 */
class pm_capitalvalue {

    /**
     * Year in which the Capital Value appears
     * @var int 
     */
    private $i_year;

    /**
     * Rent of the Capital Value
     * @var double 
     */
    private $d_rent;

    /**
     * Input Money Value
     * @var double 
     */
    private $d_inputMoneyVal;

    /**
     * Output Money Value
     * @var double 
     */
    private $d_outputMoneyVal;

    /**
     * Standard Constructor
     */
    function __construct() {
        
    }

    /**
     * Return an Year
     * @return int
     */
    function getYear() {
        return $this->i_year;
    }

    /**
     * Return the Rent
     * @return double
     */
    function getRent() {
        return $this->d_rent;
    }

    /**
     * Get Array with the Informations
     * Needed for the Database Input
     * @param int $p_id
     */
    public function getArray($p_id) {
        $array = array();
        $array['p_id'] = $p_id;
        $array['jahr'] = $this->getYear();
        $array['zins'] = $this->getRent();
        $array['ein'] = $this->getInputMoneyVal();
        $array['aus'] = $this->getOutputMoneyVal();
        return $array;
    }

    /**
     * Return the Input Money Value
     * @return double
     */
    function getInputMoneyVal() {
        return $this->d_inputMoneyVal;
    }

    /**
     * Return the Output Money Value
     * @return double
     */
    function getOutputMoneyVal() {
        return $this->d_outputMoneyVal;
    }

    /**
     * Sets the Year of the Capital Value
     * @param int $i_year
     */
    function setYear($i_year) {
        $this->i_year = $i_year;
    }

    /**
     * Sets the Rent of the Capital Value
     * @param double $d_rent
     */
    function setRent($d_rent) {
        $this->d_rent = $d_rent;
    }

    /**
     * Sets the Input Money Value
     * @param double $d_inputMoneyVal
     */
    function setInputMoneyVal($d_inputMoneyVal) {
        $this->d_inputMoneyVal = $d_inputMoneyVal;
    }

    /**
     * Sets the Output Money Value
     * @param double $d_outputMoneyVal
     */
    function setOutputMoneyVal($d_outputMoneyVal) {
        $this->d_outputMoneyVal = $d_outputMoneyVal;
    }

}
