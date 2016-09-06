<?php

/**
 * Description of "Abteilung"
 * @author Artur
 *
 * Add the specific Coding Guidelines
 * @since 24.07.2016
 * @author Lukas
 */
class pm_team {

    /**
     * ID of the Team
     * @var int 
     */
    private $i_id;

    /**
     * Number of Employee
     * @var int 
     */
    private $i_mitarbeiteranzahl;
    
    /**
     * Name of the Team
     * @var string 
     */
    private $s_name;
    
    /**
     * ID of the Section where the Team is located
     * @var int 
     */
    private $i_bereich_id;
    
    /**
     * Sets the ID of the Team
     * @param int ID
     */
    public function setId($i_id)
    {
        $this->i_id = $i_id;
    }
    
    /**
     * Sets the Number of Employees
     * @param int Number of Employees
     */
    public function setMitarbeiterZahl($i_zahl)
    {
        $this->i_mitarbeiteranzahl = $i_zahl;
    }
    
    /**
     * Sets the Name of the Team
     * @param string Team Name
     */
    public function setName($s_abteilungsName)
    {
        $this->s_name = $s_abteilungsName;
    }
    
    /**
     * Set the Section ID
     * @param int Section ID
     */
    public function setSectionId($i_bereichsID)
    {
        $this->i_bereich_id = $i_bereichsID;
    }
    
    /**
     * Returns the ID of the Team
     * @return int ID
     */
    public function getId()
    {
        return $this->i_id;
    }
    
    /**
     * Returns the Number of Employees
     * @return int Employee Number
     */
    public function getEmployeeNumber()
    {
        return $this->i_mitarbeiteranzahl;
    }
    
    /**
     * Returns the Team Name
     * @return string Name
     */
    public function getName()
    {
        return $this->s_name;
    }
    
    /**
     * Returns the ID of the Section
     * @return int Section ID
     */
    public function getSectionId()
    {
        return $this->i_bereich_id;
    }
}
