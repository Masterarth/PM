<?php

/**
 * Description of projektstatus
 *
 * @author Arth
 */
class pm_projektstatus {

    private $id;
    private $description;

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

}
