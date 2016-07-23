<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);

if (isset($_POST["reg"])) {
    $result = core()->db()->select("select * from users where l_name ='" . $_POST["reg"]["account_name"] . "'");
    if (count($result) > 0) {
        if (password_verify($_POST["reg"]["password"], $result[0]->passwort)) {
            header('Location: /pm/start');
            exit;
        }
    }
}