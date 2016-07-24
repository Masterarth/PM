<?php

class load_page {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function autoload() {

        $page = core()->request()->getController();

        if (!core()->userhandler()->checkUser() and $page != "registrierung") {
            $page = "anmelden";
        }

        $page_path = BASEPATH . 'templates/' . $page . '.tpl';
        $page_path = realpath($page_path);

        if (!file_exists($page_path)) {
            $controller_path = BASEPATH . 'controller/' . $page . '.php';
            $controller_path = realpath($controller_path);
            if (!file_exists($controller_path)) {
                $page = "404";
            }
        }

        core()->smarty()->assign('page', $page . '.tpl');
        core()->smarty()->assign("showNavbar", TRUE);
        core()->smarty()->assign("showNavButton", TRUE);
        core()->materialize()->clearFixedNavElements();

        if ($page) {
            $_SESSION["page"] = $page;
            $controllerpath = BASEPATH . 'controller/' . $page . '.php';
            $controller = realpath($controllerpath);
            if (file_exists($controller)) {
                include $controller;
            }
            core()->smarty()->display('index.tpl');
        }
    }

    public function loadController($controller) {
        if ($controller) {
            $_SESSION["page"] = $controller;
            $controllerpath = BASEPATH . 'controller/' . $controller . '.php';
            $controller = realpath($controllerpath);
            if (file_exists($controller)) {
                include $controller;
            }
        }
    }

    public function loadPage($page) {
        $page_path = BASEPATH . 'templates/' . $page . '.tpl';
        $page_path = realpath($page_path);
        if (!file_exists($page_path)) {
            $page = "404";
        }
        core()->smarty()->assign('page', $page . '.tpl');
    }

}
