<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);
core()->smarty()->assign("pageTitle", FALSE);

if (core()->userhandler()->checkUser()) {
    header('Location: /pm/start');
    exit;
}

if (isset($_POST["reg"])) {
    if (core()->userhandler()->verfiyUser($_POST["reg"]["account_name"], $_POST["reg"]["password"])) {
        header('Location: /pm/dashboard');
        exit;
    }
}