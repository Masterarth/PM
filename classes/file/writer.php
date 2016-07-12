<?php

/**
 * Diese Datei enthält die abstrakte file_writer-Klasse des Filehandlers
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */

/**
 * Abstrakte file_writer-Klasse des Filehandlers.
 * Enthält folgende Funktionen:
 * - Datei erstellen
 * - Bild speichern
 * - Json speichern
 * - Cache-Datei speichern
 * - Log schreiben
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */
abstract class file_writer extends file_reader {

    /**
     * Erstellt / schreibt eine Datei
     * @param string $file
     * @param string $content
     * @return boolean
     */
    public final function create($file, $content) {
        if ($file) {
            $this->checkDir($file);
            if (file_put_contents($file, $content)) {
                core()->log()->write('Datei [' . $file . '] wurde erfolgreich geschrieben!', 'write', '1');
                return true;
            } else {
                core()->log()->write('Datei [' . $file . '] wurde nicht erfolgreich geschrieben!', 'write', '2');
                core()->log()->write('Probleme beim erstellen oder beschreiben der Datei!', 'write', '2');
                return false;
            }
        } else {
            core()->log()->write('Datei [' . $file . '] wurde nicht erfolgreich geschrieben!', 'write', '2');
            core()->log()->write('File fehlt', 'write', '2');
            return false;
        }
    }

    /**
     * schreibt eine Datei
     * @param string $filename
     * @param string $filepath
     * @param string $fileextension
     * @param string $content
     * @return boolean
     */
    public final function write($filename, $filepath, $fileextension, $content) {
        $file = $filepath . $filename . $fileextension;
        return $this->create($file, $content);
    }

    /**
     * Speichert ein Bild ab
     * @param string $filename
     * @param string $content
     * @return boolean
     */
    public function savePic($filename, $content) {
        return $this->write($filename, core()->config()->getDATA_PICPATH(), '.jpg', $content);
    }

    /**
     * Cached eine Datei
     * @param string $filename
     * @param string $content
     * @return boolean
     */
    public function cache($filename, $content) {
        return $this->write($filename, core()->config()->getDATA_CACHEPATH(), '', $content);
    }

    /**
     * Schreibt eine Json-Datei
     * @param string $filename
     * @param string $content
     * @return boolean
     */
    public function writeJson($filename, $content) {
        return $this->create($filename, json_encode($content));
    }

    /**
     * Schreibt ein Logfile
     * @param string $filename
     * @param string $content
     * @return boolean
     */
    public function log($filename, $content) {
        if ($filename & $content) {
            $this->checkDir($filename);
            if (file_put_contents($filename, $content, FILE_APPEND)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function saveXml($xmlname, $xmlstring) {
        if ($xmlname && $xmlstring) {
            $xml = new SimpleXMLElement($xmlstring);
            $xml->asXML($xmlname);
        }else{
            return false;
        }
    }

}
