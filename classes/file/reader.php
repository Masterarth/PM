<?php

/**
 * Diese Datei enthält die abstrakte file_reader-Klasse des Filehandlers
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */

/**
 * Abstrakte file_reader-Klasse des Filehandlers.
 * Enthält folgende Funktionen:
 * - Datei lesen
 * - Json lesen
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */
abstract class file_reader extends file_base {

    /**
     * Liest eine Datei ein und gibt sie zurück
     * @param string $file
     * @return string
     */
    public final function read($file) {
        $content = file_get_contents($file);
        return $content;
    }

    /**
     * Liest ein Json ein und gibt es als Array zurück
     * @param string $file
     * @return array
     */
    public final function loadJson($file) {
        $content = json_decode(file_get_contents($file), true);
        return $content;
    }

}
