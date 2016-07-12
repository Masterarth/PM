<?php

function autoloader($class) {
    $file = BASEPATH . 'classes/' . $class . '.php';
    if (is_readable($file)) {
        require $file;
    } else {
        $file = BASEPATH . 'classes/' . str_replace("_", "/", $class) . '.php';
        if (is_readable($file)) {
            require $file;
        } else {
            return false;
        }
    }
}

spl_autoload_register('autoloader');
