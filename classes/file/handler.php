<?php
/**
 * Diese Datei enthält die Handlerklasse des Filehandlers.
 * Diese kann implementiert werden.
 * @package ReservixInterface
 * @category filehandler
 * @version handler 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */

/**
 * Handlerklasse des Filehandlers
 * @uses classes_filehandler_writer Erbt von writer
 */
class file_handler extends file_writer {
    /**
     * Singelton Pattern
     * Filehandler Objekt
     * @var Object
     */
    static private $instance = null;

    /**
     * Singelton Pattern
     * @return Object
     */
    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Singelton Pattern
     */
    private function __construct() {

    }

    /**
     * Singelton Pattern
     */
    private function __clone() {
        
    }

}
