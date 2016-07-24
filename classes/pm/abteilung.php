<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of "Abteilung"
 * @author Artur
 *
 * Add the specific Coding Guidelines
 * @since 24.07.2016
 * @author Lukas
 */
class abteilung {

    private $i_id;
    private $i_mitarbeiteranzahl;
    private $s_name;
    private $i_bereich_id;
    
    /**
     * Setzen der AbteilungsId
     * @param int ID
     */
    public function setId($i_id)
    {
        $this->i_id = $i_id;
    }
    
    /**
     * Setzen der Mitarbeiteranzahl
     * @param int Anzahl Mitarbeiter
     */
    public function setMitarbeiterZahl($i_zahl)
    {
        $this->i_mitarbeiteranzahl = $i_zahl;
    }
    
    /**
     * Setzen des Abteilungsnamen
     * @param string Name
     */
    public function setName($s_abteilungsName)
    {
        $this->s_name = $s_abteilungsName;
    }
    
    /**
     * Setzen der BereichsId
     * @param int BereichsID
     */
    public function setBereichsId($i_bereichsID)
    {
        $this->i_bereich_id = $i_bereichsID;
    }
    
    /**
     * Rückgabe AbteilungsId
     * @return int ID
     */
    public function getId()
    {
        return $this->i_id;
    }
    
    /**
     * Rückgabe Mitarbeiterzahl
     * @return int Anzahl
     */
    public function getMitarbeiterZahl()
    {
        return $this->i_mitarbeiteranzahl;
    }
    
    /**
     * Rückgabe Abteilungsname
     * @return string Name
     */
    public function getName()
    {
        return $this->s_name;
    }
    
    /**
     * Rückgabe BereichsId
     * @return int BereichsID
     */
    public function getBereichsId()
    {
        return $this->i_bereich_id;
    }
}
