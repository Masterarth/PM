<?php

class load_config {

    private $configFile;
    private $configFilePath;

    /**
     * Geladene Konfig
     * @var array
     */
    private $config = array();

    /**
     * Singelton Pattern
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
     * Beim Instanzieren wird die Konfigdatei eingelesen
     */
    private function __construct() {
        $this->configFile = 'core.ini';
        $this->configFilePath = BASEPATH . 'config/';
        $this->configFile = $this->configFilePath . $this->configFile;
        $this->loadConfig();
    }

    /**
     * Singelton Pattern
     */
    private function __clone() {
        
    }

    /**
     * Gibt den Konfigdateinamen zurück
     * @return string
     */
    public function getConfigFile() {
        return $this->configFile;
    }

    /**
     * Setzt & lädt eine neue Config
     * @param string $configfile
     */
    public function setConfigfile($configfile) {
        if ($configfile) {
            if (is_readable($this->configFilePath . $configfile)) {
                $this->configFile = $configfile;
                $this->loadConfig();
            } else {
                return false;
            }
        }
    }

    /**
     * Gibt die geladene Konfig zurück
     * @return mixed
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * Magic Funktion
     * @param string $name
     * @param string $arguments
     * @return mixed
     */
    public function __call($name, $arguments) {

        $function = substr($name, 0, 3);
        $name = substr($name, 3);

        switch ($function) {
            case "get":
                if (preg_match("'(FILE|PATH)$'", $name)) {
                    if (preg_match("'(^[/])'", $this->config[$name])) {
                        return $this->config[$name];
                    } else {
                        return BASEPATH . $this->config[$name];
                    }
                } else {
                    return $this->config[$name];
                }
                break;
        }
    }

    /**
     * Lädt die Konfigurationsdatei ein.
     */
    private function loadConfig() {
        if (is_readable($this->configFile)) {
            $config = parse_ini_file($this->configFile);
            $ini = array();
            foreach ($config as $key => $value) {
                $p = &$ini;
                foreach (explode('.', $key) as $k)
                    $p = &$p[$k];
                $p = $value;
            }
            unset($p);
            $this->config = $ini;
        } else {
            throw new Exception("Config konnte nicht geladen werden!");
        }
    }

}
