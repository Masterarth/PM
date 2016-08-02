<?php

core()->materialize()->addFixedNavElement("/pm/firma/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select f_name from firma where f_name ='" . $_POST["reg"]["name"] . "'");
    if (count($result) <= 0) {

        $firma["name"] = $_POST["reg"]["name"];

        $fid = core()->db()->update("insert into firma (f_name) values (:name)", $firma);

        header('Location: /pm/firma/dashboard');
        exit;
    } else {
        core()->materialize()->toast("Firma existiert bereits!");
    }
}
