<?php
/**
 * Log In into the PAMS System
 * 1. Look Up
 * 2. Checks if the User is active
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


if (core()->userhandler()->checkUser()) {
    header('Location: /pm/dashboard');
    exit;
}

if (isset($_POST["reg"])) {
    if (core()->userhandler()->verfiyUser($_POST["reg"]["account_name"], $_POST["reg"]["password"])) {
        if ($_SESSION["user"]->isAktiv()) {
            header('Location: /pm/dashboard');
            exit;
        } else {
            core()->materialize()->toast("Ihr Benutzer ist noch nicht freigeschalten");
        }
    } else {
        core()->materialize()->toast("Loginname oder Passwort ist falsch");
    }
}