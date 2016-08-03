<?php

class materializecss_handler {

    static private $instance = null;
    private $fixed_nav_elements = array();

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

    public function addFixedNavElement($url, $tooltip, $iconname) {
        $this->fixed_nav_elements[] = array("url" => $url, "tooltip" => $tooltip, "iconname" => $iconname);
    }

    public function showFixedNavElement() {
        core()->smarty()->assign("fixed_button_nav_elements", $this->fixed_nav_elements);
    }

    public function clearFixedNavElements() {
        $this->fixed_nav_elements = array();
    }

    public function parallax($bool) {
        if ($bool) {
            core()->smarty()->assign("parallax", true);
        } else {
            core()->smarty()->assign("parallax", false);
        }
    }

    public function pageTitle($title) {
        core()->smarty()->assign("pageTitle", strtoupper($title));
    }

}
