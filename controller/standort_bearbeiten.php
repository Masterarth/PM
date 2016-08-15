<?php
/**
 * Edit for a Location
 * 1. Get the Location from the Database
 * 2. Reads the Update Values
 * 3. Update the Location 
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


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


core()->materialize()->addFixedNavElement("/pm/standort/" . $request[3], "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
