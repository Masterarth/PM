<?php

class request_handler {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function getController() {
        $request = explode('/', $_SERVER['REQUEST_URI']);
        $request = array_merge(array_filter($request));
        if (isset($request[1])) {
            return $request[1];
        } else {
            return core()->config()->getdefaultpage();
        }
    }

    public function getParams() {
        $request = explode('/', $_SERVER['REQUEST_URI']);
        $request = array_merge(array_filter($request));
        if (isset($request)) {
            return $request;
        }
    }

}
