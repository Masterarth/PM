<?php
/**
 * Autloader File for the clean URL Stuff
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


/**
 * Autoloads the Path for the class
 * Its needed for the clean URL
 * @param string $class
 * @return boolean
 */
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
