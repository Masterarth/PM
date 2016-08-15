<?php

/**
 * Permission Base Class
 * Checks the Groups for the Permissions
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
class permission_base {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function checkGrp($user, $controller) {
        if (core()->config()->getpermissioncheck() == true) {
            $permissionConfig = include 'config/permission.php';
            if (isset($user) && isset($permissionConfig) && isset($controller)) {
                if (array_key_exists($controller, $permissionConfig)) {
                    $result = array_search(strtolower("all"), $permissionConfig[$controller]);
                    if ($result !== false && $result >= 0) {
                        return true;
                    }
                    $result = array_search(strtolower($user->getRolle()), $permissionConfig[$controller]);
                    if ($result !== false && $result >= 0) {
                        return true;
                    }
                }
            }
        } else {
            return true;
        }
        return false;
    }

}
