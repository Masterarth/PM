<?php
/**
 * Setups the Smart Bibliothek
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


define('SMARTY_DIR', BASEPATH . 'bin/smarty/libs/');
require(SMARTY_DIR . 'Smarty.class.php');

class setup_smarty extends Smarty {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function __construct() {
        parent::__construct(); 

        $this->template_dir = BASEPATH . 'templates/';
        $this->compile_dir = BASEPATH . 'bin/smarty/templates_c/';
        $this->config_dir = BASEPATH . 'bin/smarty/configs/';
        $this->cache_dir = BASEPATH . 'bin/smarty/cache/';
    }

}
