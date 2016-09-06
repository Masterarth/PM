<?php

require '../classes/pm/capitalvaluemethod.php';
require '../classes/pm/capitalflow.php';
require '../classes/pm/inflation.php';

/**
 * Test for the Capital Value Method
 *
 * @author Lukas Adler
 */
class CapitalValueMethodTest extends \PHPUnit_Framework_TestCase {

    /**
     * Checks Invalid Params for Constructor
     */
    public function testExceptionIsRaisedForInvalidConstructorArgument() {
        new pm_capitalvaluemethod("?",2, 3, 400, null);
    }
    
    /**
     * Checks a correct Constructor
     */
    public function testNormalConstrucorArgument(){
        new pm_capitalvaluemethod(0,2,3,400,null);
    }

    /**
     * Checks Invalid Params for Constructor
     */
    public function testCapitalValueMethod() {

        $capitalFlow1 = new pm_capitalflow(0, 100, 50);
        $capitalFlow2 = new pm_capitalflow(0, 200, 50);
        $container = array();
        $container[] = $capitalFlow1;
        $container[] = $capitalFlow2;
        $capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$container);
        $capitalvalmeth->calculateCapitalValue();
        $this->assertGreaterThanOrEqual(100, $capitalvalmeth->getCapitalValue());
        
    }
    
    /**
     * Tests the Array of the Capitalvalue Method 
     * (Are they CapitalFlows`?)
     */
    public function testCapitalflowInstances()
    {
        
        $capitalFlow1 = new pm_capitalflow(0, 100, 50);
        $capitalFlow2 = new pm_capitalflow(0, 200, 50);

        $container = array();
        $container[] = $capitalFlow1;
        $container[] = $capitalFlow2;
        
        $capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$container);
        $capitalvalmeth->calculateCapitalValue();
        
         $this->assertContainsOnlyInstancesOf(
                 pm_capitalflow::class,$capitalvalmeth->getO_capitalflows()
        );
    }

}
