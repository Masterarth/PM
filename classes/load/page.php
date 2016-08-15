<?php
/**
 * Class handels the Loading Stuff
 * 1. Loading Controllers
 * 2. Loading Pages
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
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

        core()->smarty()->assign("showNavbar", true);
        core()->smarty()->assign("showNavButton", true);
        
        $page = core()->request()->getController();

        if (!core()->userhandler()->checkUser() && !$this->defaultPage($page)) {
            $page = "anmelden";
        }

        if (isset($_SESSION["user"]) && !core()->permission()->checkGrp($_SESSION["user"], $page) && !$this->defaultPage($page)) {
            $page = "401";
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
        core()->materialize()->clearFixedNavElements();
        core()->materialize()->parallax(false);
        core()->materialize()->pageTitle($page);

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
            if (isset($_SESSION["user"]) && !core()->permission()->checkGrp($_SESSION["user"], $controller) && !$this->defaultPage($controller)) {
                $page = "401";
            }
            $_SESSION["page"] = $controller;
            $controllerpath = BASEPATH . 'controller/' . $controller . '.php';
            $controller = realpath($controllerpath);
            if (file_exists($controller)) {
                include $controller;
            }
        }
    }

    public function loadPage($page) {
        if (isset($_SESSION["user"]) && !core()->permission()->checkGrp($_SESSION["user"], $page) && !$this->defaultPage($page)) {
            $page = "401";
        }
        $page_path = BASEPATH . 'templates/' . $page . '.tpl';
        $page_path = realpath($page_path);
        if (!file_exists($page_path)) {
            $page = "404";
        }
        core()->smarty()->assign('page', $page . '.tpl');
    }

    private function defaultPage($page) {
        $defaultPages = include 'config/default_pages.php';
        if (in_array($page, $defaultPages)) {
            core()->smarty()->assign("showNavbar", false);
            core()->smarty()->assign("showNavButton", false);
            return true;
        }
        return false;
    }

}
