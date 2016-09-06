<?php

require '../classes/pm/team.php';

/**
 * Tests 1 Standard Class for an Example
 * For all the other classes would it be the same Stuff
 *
 * @author Lukas Adler
 */
class TeamTest  extends \PHPUnit_Framework_TestCase{
    
    
    
    /**
     * Checks Invalid Params for Constructor
     */
    public function testExceptionIsRaisedForInvalidConstructorArguments() {
        $team = new pm_team("was passiert...");
    }
    
    /**
     * Checks all Setter for the Class
     */
    public function testGetterSetterCorrect(){
        $team = new pm_team();
        $team->setId(1);
        $team->setMitarbeiterZahl(10);
        $team->setName("hallo");
        $team->setSectionId(3);
        
        
        $this->assertEquals(1, $team->getId());
        $this->assertEquals(10, $team->getEmployeeNumber());
        $this->assertEquals("hallo", $team->getName());
        $this->assertEquals(3, $team->getSectionId());
        
    }
    
    /**
     * Checks all Setter for the Class
     */
    public function testGetterSetterIncorrect(){
        $team = new pm_team();
        $team->setId(1);
        $team->setMitarbeiterZahl(10);
        $team->setName("hallo");
        $team->setSectionId(3);
        
        
        $this->assertEquals(3, $team->getId());
        $this->assertEquals(12, $team->getEmployeeNumber());
        $this->assertEquals("hllo", $team->getName());
        $this->assertEquals(13, $team->getSectionId());
        
    }
    
    
    
}
