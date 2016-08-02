<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from mitarbeiter where id ='" . $_POST["reg"]["id"] . "'", "fetch");
    if ($result) {

        $mitarbeiter["vorname"] = $_POST["reg"]["vorname"];
        $mitarbeiter["nachname"] = $_POST["reg"]["nachname"];

        $fid = core()->db()->update("update mitarbeiter set vorname=:vorname, nachname=:nachname where id=" . $_POST["reg"]["id"], $mitarbeiter);

        header('Location: /pm/mitarbeiter/' . $_POST["reg"]["id"]);
        exit;
    }
}

