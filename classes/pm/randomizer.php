<?php


/**
 * Adds a randomizer for the Pictures
 * It depends on the Project, Team, ... ID
 *
 * @author Lukas Adler
 */
class pm_randomizer {

    /**
     * Singelton Pattern
     * @var Object
     */
    static private $o_instance = null;

    /**
     * For which Basic Informations
     * @var String 
     */
    private $s_randomizerString;

    /**
     * Path to the Picture
     * @var String 
     */
    private $s_filePath;

    /**
     * Name of the Picture
     * @var String 
     */
    private $s_pictureName;

    /**
     * Standard Constructor
     */
    function __construct() {
        $this->s_filePath = "/pm/bin/custom/images/";
    }
    
    
    /**
     * Singelton Pattern
     */
    private function __clone() {
        
    }
    
    /**
     * Singelton Pattern
     * @return Object
     */
    static public function getInstance() {
        if (null === self::$o_instance) {
            self::$o_instance = new self();
        }
        return self::$o_instance;
    }

    

    /**
     * Returns a Picture
     * @param int $id
     * @param String $name ("projekt"/"mitarbeiter"/"budget"/"abteilung"/"standort"/"team");
     * @return type
     */
    public function getPicture($id, $name) {
        $this->s_randomizerString = $name;
        $i = $id % 5;
        $this->s_pictureName = $this->s_randomizerString . "_" . $i . ".jpg";
        return $this->s_filePath . $this->s_pictureName;
    }

    /**
     * Gets the String
     * @return String
     */
    function getS_randomizerString() {
        return $this->s_randomizerString;
    }

    /**
     * Gets the Path of the File
     * @return String
     */
    function getS_filePath() {
        return $this->s_filePath;
    }

    /**
     * Gets the Name of the Picture
     * @return String
     */
    function getS_pictureName() {
        return $this->s_pictureName;
    }

    /**
     * Sets the Random String
     * @param String $s_randomizerString
     */
    function setS_randomizerString($s_randomizerString) {
        $this->s_randomizerString = $s_randomizerString;
    }

    /**
     * Sets the File Path
     * @param String $s_filePath
     */
    function setS_filePath($s_filePath) {
        $this->s_filePath = $s_filePath;
    }

    /**
     * Sets the Picture Name
     * @param String $s_pictureName
     */
    function setS_pictureName($s_pictureName) {
        $this->s_pictureName = $s_pictureName;
    }

}
