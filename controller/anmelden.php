<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);

if (isset($_POST["reg"])) {
    $result = core()->db()->select("select * from users where l_name ='" . $_POST["reg"]["account_name"] . "'");
    if (count($result) > 0) {
        if (password_verify($_POST["reg"]["password"], $result[0]->passwort)) {
            echo "<script type=\"text/javascript\">Materialize.toast('I am a toast!', 4000);</script>";
            header('Location: /pm/start');
            exit;
        }
    }
}