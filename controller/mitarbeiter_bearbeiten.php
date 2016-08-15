<?php
/**
 * Edits a existing Employee
 * 1. Get the Employee with an ID
 * 2. Updates an Employee
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */


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

