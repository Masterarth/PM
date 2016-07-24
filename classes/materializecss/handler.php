<?php

class materializecss_handler {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function toast($outputText, $outputVar = "toast", $time = 4000, $style = "rounded") {
        core()->smarty()->assign($outputVar, "<script type=\"text/javascript\">Materialize.toast('" . $outputText . "', " . $time . ", '" . $style . "');</script>");
    }

}
