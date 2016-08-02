<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from standort where id ='" . $_POST["reg"]["id"] . "'", "fetch");
    if ($result) {

        $standort["name"] = $_POST["reg"]["s_name"];
        $standort["plz"] = $_POST["reg"]["plz"];
        $standort["ort"] = $_POST["reg"]["ort"];
        $standort["strasse"] = $_POST["reg"]["strasse"];
        $standort["hausnr"] = $_POST["reg"]["hausnr"];

        $id = core()->db()->update("update standort set s_name=:name, plz=:plz, ort=:ort, strasse=:strasse, hausnummer=:hausnr where id=" . $_POST["reg"]["id"], $standort);
        header('Location: /pm/standort/' . $_POST["reg"]["id"]);
        exit;
    }
}

