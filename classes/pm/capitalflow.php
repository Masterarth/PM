<?php

$c1 = new pm_capitalflow(2, 200, 100);
var_dump($c1);

echo "\n\n <h1>--------------------</h1>";

$c2 = new pm_capitalflow(1, 200, 100);
var_dump($c2);

echo "\n\n <h1>--------------------</h1>";

$arr = array();
$arr[0] = $c1;
$arr[1] = $c2;

var_dump($arr);
 $capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$arr);


/**
 * Capitalflow for the Capital Value Method
 * Its the Capitalflow for 1 Year
 * 
 * @author Lukas Adler
 * @since 02.08.2016
 */
class pm_capitalflow {

    /**
     * Cash Income
     * @var double 
     */
    private $d_inputCash;

    /**
     * Cash Output
     * @var double 
     */
    private $d_outputCash;

    /**
     * Years for the Capital Value Method
     * @var int 
     */
    private $i_year;

    /**
     * Constructor which creates a Capitalflow for the Capitalvaluemethod
     * @param int $i_year
     * @param double $d_inputCash
     * @param double $d_outputCash
     */
    public function __construct($i_year, $d_inputCash, $d_outputCash) {
        $this->i_year = $i_year;
        $this->d_inputCash = $d_inputCash;
        $this->d_outputCash = $d_outputCash;
    }

    /**
     * Sets the Year of a Capital Flow
     * @param int $i_year
     */
    public function setYears($i_year) {
        $this->i_year = $i_year;
    }

    /**
     * Sets the Cash Income
     * @param double $d_cashIn
     */
    public function setInputCash($d_cashIn) {
        $this->d_inputCash = $d_cashIn;
    }

    /**
     * Sets the Cash Output
     * @param double $d_cashOut
     */
    public function setOutputCash($d_cashOut) {
        $this->d_outputCash = $d_cashOut;
    }

    /**
     * Returns the Income of the Capitalflow
     * @return double Income
     */
    public function getInputCash() {
        return $this->d_inputCash;
    }

    /**
     * Returns the Costs of the Capitalflow
     * @return double Costs
     */
    public function getOutputCash() {
        return $this->d_outputCash;
    }

    /**
     * Returns the Year of the Capitalflow
     * @return int Year
     */
    public function getYear() {
        return $this->i_year;
    }

}
