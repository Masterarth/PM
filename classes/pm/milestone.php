<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Milestones 
 * This Class handels all Milestones for a Project
 * @author Lukas Adler
 */
class pm_milestone {

    /**
     * Is the Milestone done?
     * @var bool 
     */
    private $b_finished;

    /**
     * Number of the Milestone
     * @var int 
     */
    private $i_milestoneNr;

    /**
     * Number of the ID from the Database
     * @var int 
     */
    private $i_id;

    /**
     * Name of the Milestone
     * @var string 
     */
    private $s_milestoneName;

    /**
     * Constructor for the Milestones of a Project
     */
    public function __construct() {
        
    }

    /**
     * Returns if the Milestone is done
     * @return bool
     */
    public function getFinished() {
        return $this->b_finished;
    }

    /**
     * Sets if the Milestone ist done
     * @param bool $b_finished
     */
    public function setFinished($b_finished) {
        $this->b_finished = $b_finished;
    }

    /**
     * Returns if the Milestone is done
     * @return bool
     */
    public function getMilestoneName() {
        return $this->s_milestoneName;
    }

    /**
     * Sets the Name of a Milestone
     * @param string $s_name
     */
    public function setMilestoneName($s_name) {
        $this->s_milestoneName = $s_name;
    }

    /**
     * Returns the Number of the Milestone
     * @return bool
     */
    public function getMilestoneNr() {
        return $this->i_milestoneNr;
    }

    /**
     * Sets the Number of the Milestone
     * @param int $i_nr
     */
    public function setMilestoneNr($i_nr) {
        $this->i_milestoneNr = $i_nr;
    }

    /**
     * Returns the DatabaseId Number
     * @return bool
     */
    public function getDatabaseId() {
        return $this->i_id;
    }

    /**
     * Sets the DatabaseId Number
     * @param int $i_id
     */
    public function setDatabaseId($i_id) {
        $this->i_id = $i_id;
    }

    /**
     * Updates the Milestone in the Database
     */
    public function updateDatabaseMilestone() {

        $updateArray = array();

        $updateArray["msNr"] = $this->i_milestoneNr;
        $updateArray["msName"] = $this->s_milestoneName;
        $updateArray["msDone"] = $this->b_finished;
        core()->db()->update("update meilensteine set ms_nummer=:msNr, meilenstein=:msName, erfuellt=:msDone where id=" . $this->i_id, $updateArray);
    }

}
