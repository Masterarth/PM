<?php

/**
 * Diese Datei enthält die Loghandlerklasse
 * @package ReservixInterface
 * @category loghandler
 * @version loghandler 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */

/**
 * Loghandlerklasse
 * Enthält folgende Funktionen:
 * - Zeitpunkt aufnehmen
 * - Zeitpunkte verrechnen
 * - Dauer prüfen
 * - log schreiben
 * - logdatei größe prüfen
 * @package ReservixInterface
 * @category loghandler
 * @version loghandler 1.0
 * @author Artur Stalbaum <stalbaum@medianet.freinet.de>
 */
class log_handler {

    /**
     * Enthält Zeitpunkte
     * @var array 
     */
    private $timemarks = array();

    /**
     * Loghandler Objekt
     * @var Object 
     */
    static private $instance = null;

    /**
     * Singelton Pattern
     * @return Object
     */
    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
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

    /**
     * Funktion um Zeitpunkt zu setzten
     * @param string $info1
     * @param string $info2
     * @param boolean $need
     */
    public function timemark($info1, $info2, $need = true) {

        $timemark = array(
            'time' => microtime(true),
            'info1' => $info1,
            'info2' => $info2,
            'memory' => memory_get_usage(),
            'need' => $need
        );
        $this->timemarks[] = $timemark;
    }

    /**
     * Verrechnet alle Zeiten
     * @param boolean $save
     */
    public function renderTimes($save = null) {
        $marks = array();
        $renderTime = 0;

        if ($this->timemarks) {
            for ($i = 0; $i < count($this->timemarks); $i++) {
                if ($this->timemarks[$i]['need'] == true) {
                    if ($i != (count($this->timemarks) - 1)) {
                        $duration = $this->timemarks[$i + 1]['time'] - $this->timemarks[$i]['time'];
                    } else {
                        $duration = $this->timemarks[$i]['time'] - $this->timemarks[$i - 1]['time'];
                    }
                    $marks[] = array(
                        'time' => strftime("%H:%M:%S", $this->timemarks[$i]['time']),
                        'renderTime' => round($renderTime, 4) . " S",
                        'duration' => $this->checkDuration($duration) . " S",
                        'memory' => round(($this->timemarks[$i]['memory'] / 1024 / 1024), 2) . " MB",
                        'info1' => $this->timemarks[$i]['info1'],
                        'info2' => $this->timemarks[$i]['info2'],
                    );
                    $renderTime += $duration;
                }
            }
            if ($marks) {
                echo '<table border="1" style="text-align:right">';
                echo "<tr>";
                foreach ($marks[0] as $key => $value) {
                    echo "<td>" . $key . "</td>";
                }
                echo "</tr>";
                for ($i = 0; $i < count($marks); $i++) {
                    if ($save) {
                        file_put_contents(core()->config()->getLOG_PATH() . 'zeiten.txt', implode("\t", $marks[$i]) . "\n\r", FILE_APPEND);
                    }
                    echo "<tr>";
                    foreach ($marks[$i] as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    }

    /**
     * Prüft eine Zeitdauer
     * @param date $time
     * @return date
     */
    private function checkDuration($time) {
        if ($time >= 0.9) {
            return '<font color="red">' . $time . '</font>';
        } else {
            return $time;
        }
    }

    /**
     * Schreibt ein Logfile
     * @param string $content
     * @param string $file
     * @param int $prio
     * @return boolean
     */
    public function write($content, $file, $prio) {
        switch ($prio) {
            case 1:
                $prioText = 'OKAY';
                break;
            case 2:
                $prioText = 'FAIL';
                break;
            case 3:
                $prioText = 'WARN';
                break;
            case 4:
                $prioText = 'INFO';
                break;
        }

        $file = $this->checkLogFile(core()->config()->getLOG_PATH() . $file . ".txt");
        $data = date("Y-m-d H:i:s") . " | " . $prio . " | " . $prioText . "\t | " . $content . "\n\r";
        return core()->filehandler()->log($file, $data);
    }

    /**
     * Log-Dateigröße prüfen
     * @param string $file
     * @return string
     */
    private function checkLogFile($file) {
        if (file_exists($file)) {
            $filesize = filesize($file);
            if ($filesize) {
                $filesize = $filesize / 1024 / 1024;
                if ($filesize > core()->config()->getLOG_MAXSIZE()) {
                    core()->filehandler()->rename($file, core()->config()->getLOG_PATH() . basename($file, '.txt') . '_' . date('Y-m-d_H-i-s') . '.txt');
                }
            }
        }
        return $file;
    }

}
