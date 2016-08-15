<?php
/**
 * The Base - Core for the complete Project
 * Delegetion Class
 * @author Artur Stalbaum
 * @since 15.08.2016
 */

$path = pathinfo(dirname(__DIR__));

define('BASEPATH', $path["dirname"] . '/');
define('BASEDIR', basename($path["dirname"]));

# Local Settings
setlocale(LC_ALL, 'de_DE.ISO-8859-1@euro', 'de_DE@euro', 'de_DE', 'de', 'ge');
date_default_timezone_set('Europe/Berlin');

require_once BASEPATH . 'classes/load/auto.php';

function core() {
    return core_base::getInstance();
}

class core_base {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function config() {
        return load_config::getInstance();
    }

    public function smarty() {
        return setup_smarty::getInstance();
    }

    public function page() {
        return load_page::getInstance();
    }

    public function request() {
        return request_handler::getInstance();
    }

    public function db() {
        return new db_base();
    }

    public function filehandler() {
        return file_handler::getInstance();
    }

    public function log() {
        return log_handler::getInstance();
    }

    public function userhandler() {
        return pm_userhandler::getInstance();
    }

    public function materialize() {
        return materializecss_handler::getInstance();
    }

    public function permission() {
        return permission_base::getInstance();
    }

}
