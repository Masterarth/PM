<?php

require '../classes/pm/capitalflow.php';

/**
 * Test for the Capitalflow Class
 *
 * @author Lukas Adler
 */
class CapitalflowTest extends  \PHPUnit_Framework_TestCase {

    
    /**
     * Checks Invalid Params for Constructor
     */
    public function testExceptionIsRaisedForInvalidConstructorArguments() {
        $cf = new pm_capitalflow("10",10,10);
    }
    
    
    /**
     * Checks if the Object is an Instance of the Class
     * @return \pm_capitalflow
     */
//    public function testObjectCanBeConstructedForValidConstructorArguments()
//    {
//        $cf = new pm_capitalflow(1, 10,50);
//        $this->assertInstanceOf('../classes/pm/capitalflow/pm_capitalflow', $cf);
//        return $cf;
//    }
    
    /**
     * Checks if the Input Money Can Be Retrieved
     * @param pm_capitalflow $cf
     */
    public function testInputMoneyCanBeRetrieved()
    {
        $cf = new pm_capitalflow(1,10,50);
        $this->assertEquals(0, $cf->getInputCash());
    }
    
    
    /**
     * Checks if the Output Money Can Be Retrieved
     * @param pm_capitalflow $cf
     */
    public function testOutputMoneyCanBeRetrieved()
    {
        $cf = new pm_capitalflow(1,10,50);
        $this->assertEquals(0, $cf->getOutputCash());
    }
    
    /**
     * Tests the positiv Capital Flow
     */
    public function testPositivCapitalFlow(){
        $cf = new pm_capitalflow(1,100,300);
        $this->assertEquals(false,$cf->posCapitalFlow());
    }
    
    /**
     * Tests the negative Capital Flow
     */
    public function testNegativCapitalFlow(){
        $cf = new pm_capitalflow(1,200,100);
        $this->assertEquals(true,$cf->posCapitalFlow());
    }
    
    /**
     * Tests if the Calculation is correct
     */
    public  function testMoneyDifference(){
        $cf = new pm_capitalflow(2,400,200);
        $this->assertEquals(200,$cf->getDifferentsInOut());
    }
    
    
    

}
