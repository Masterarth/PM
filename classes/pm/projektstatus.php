<?php

/**
 * Description of projektstatus
 *
 * @author Arth
 * 
 * Changeing Structure + Codeing Guidelines
 * @since 06.09.2016
 * @author Lukas Adler
 */
class pm_projektstatus {
    
    /**
     * ID of the Status
     * @var int 
     */
    private $i_id;
    
    /**
     * Description of a Status
     * @var String 
     */
    private $s_description;

    /**
     * Returns the ID of a Project Status
     * @return int
     */
    public function getId() {
        return $this->i_id;
    }

    /**
     * Returns the Description of a Project Status
     * @return String
     */
    public function getDescription() {
        return $this->s_description;
    }

    /**
     * Sets the ID of a Project Status
     * @param int $id
     */
    public function setId($id) {
        $this->i_id = $id;
    }

    /**
     * Sets a Description of a Status
     * @param String $description
     */
    public function setDescription($description) {
        $this->s_description = $description;
    }

}
