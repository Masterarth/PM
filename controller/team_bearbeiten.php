<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from team where id ='" . $_POST["reg"]["id"] . "'", "fetch");
    if ($result) {

        $team["name"] = $_POST["reg"]["s_name"];
        $team["plz"] = $_POST["reg"]["plz"];
        $team["ort"] = $_POST["reg"]["ort"];
        $team["strasse"] = $_POST["reg"]["strasse"];
        $team["hausnr"] = $_POST["reg"]["hausnr"];

        $id = core()->db()->update("update standort set t_name=:name, plz=:plz, ort=:ort, strasse=:strasse, hausnummer=:hausnr where id=" . $_POST["reg"]["id"], $standort);
        header('Location: /pm/team/' . $_POST["reg"]["id"]);
        exit;
    }
}

