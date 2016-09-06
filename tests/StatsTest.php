<?php

require '../classes/pm/stats.php';
require '../config/core.ini';

/**
 * Test Class for the Stats Stuff
 * @deprecated since Not Finished
 * @author Lukas Adler
 */
class StatsTest extends \PHPUnit_Framework_TestCase{
    
    
    
    /**
     * Checks if the Input Money Can Be Retrieved
     * @param pm_capitalflow $cf
     */
    public function testNumEmployees()
    {
        $stats = pm_stats::getInstance();
        $this->assertInternalType("int", $stats->getNumberOfEmployees());
    }
    
    
}
