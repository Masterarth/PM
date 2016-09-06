<?php

require '../classes/pm/inflation.php';

/**
 * Tests the Inflation Test
 * Checks if the external API Access Works 
 *
 * @author Lukas Adler
 */
class InflationTest extends  \PHPUnit_Framework_TestCase{
   
    /**
     * Checks Invalid Params for Constructor
     */
    public function testExceptionIsRaisedForInvalidConstructorArguments() {
        new pm_inflation("201as6");
    }
    
    /**
     * Checks if the Inflationrate is smaller than 1
     */
    public function testInflationRate() {
        $inflation = new pm_inflation(2016);
        $this->assertGreaterThanOrEqual(1, $inflation->getInflationRate());
    }
    
}
