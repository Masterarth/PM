<?php

/**
 * Diese Datei enthält die abstrakte Basisklasse des Filehandlers
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */

/**
 * Abstrakte Basisklasse des Filehandlers.
 * Enthält folgende Funktionen:
 * - In/Out-Pfad setzen und holen
 * - Datei löschen
 * - Datei umbennen
 * - Datei verschieben
 * @package ReservixInterface
 * @category filehandler
 * @version base 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */
abstract class file_base {

    /**
     * Diese Methode löscht die angegebe Datei.
     * @param string $file
     */
    public function delete($file) {
        return unlink($file);
    }

    /**
     * Diese Methode bennent eine Datei um oder verschiebt sie.
     * @param string $oldFile Pfad + Name der alten / aktuellen Datei
     * @param string $newFile Pfad + Name der neuen Datei
     */
    public function rename($oldFile, $newFile) {
        if ($this->checkDir($newFile)) {
            return rename($oldFile, $newFile);
        } else {
            return false;
        }
    }

    /**
     * Prüft ob der benötigte Ordner im angegebenen Pfad verfügbar ist
     * @param string $file
     * @return boolean
     */
    public function checkDir($file) {
        $dir = dirname($file);
        if (!file_exists($dir)) {
            if (mkdir($dir)) {
                chmod($dir, 0777);
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    /**
     * Gibt die Größe eines Ordners zurück
     * @param string $dirname
     * @return boolean|int Falls Fehlschlägt false sonst Size in byte (int)
     */
    public function dirSize($dirname) {
        $dir_handle = null;
        $size = null;
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }

        if (!$dir_handle) {
            return false;
        }

        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (is_dir($dirname . $file)) {
                    $size2 = $this->dirSize($dirname . $file . "/");
                    $size += $size2;
                } else {
                    $size += filesize($dirname . $file);
                }
            }
        }

        closedir($dir_handle);
        return $size;
    }

    /**
     * Löscht rekursiv den angegebenen Ordner
     * @param string $dirname
     * @return boolean
     */
    public function deleteDir($dirname) {
        $dir_handle = null;
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }

        //Falls Verzeichnis nicht geoeffnet werden kann, mit Fehlermeldung terminieren
        if (!$dir_handle) {
            if (file_exists($dirname)) {
                unlink($dirname);
                return true;
            }
            return false;
        }

        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname . "/" . $file)) { //Datei loeschen
                    @unlink($dirname . "/" . $file);
                } else { //Falls es sich um ein Verzeichnis handelt, "delete_directory" aufrufen
                    $this->deleteDir($dirname . '/' . $file);
                }
            }
        }

        closedir($dir_handle);
        //Verzeichnis loeschen
        if (rmdir($dirname)) {
            return true;
        } else {
            return false;
        }
    }

}
