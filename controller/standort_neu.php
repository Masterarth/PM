<?php

/**
 * Creates a new Location for a Company
 * 1. Checks if an Locations exists
 * 2. If there is no Location with the same Values, create a new one
 * 3. Insert into the Database
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from standort where "
            . "s_name ='" . $_POST["reg"]["s_name"] . "' and "
            . "strasse = '" . $_POST["reg"]["strasse"] . "' and "
            . "hausnummer = " . $_POST["reg"]["hausnr"] . " and "
            . "plz = " . $_POST["reg"]["plz"] . " and "
            . "ort = '" . $_POST["reg"]["ort"] . "'"
    );
    if (count($result) <= 0) {

        $standort["s_name"] = $_POST["reg"]["s_name"];
        $standort["plz"] = $_POST["reg"]["plz"];
        $standort["ort"] = $_POST["reg"]["ort"];
        $standort["strasse"] = $_POST["reg"]["strasse"];
        $standort["hausnummer"] = $_POST["reg"]["hausnr"];

        var_dump($standort);

        $uid = core()->db()->update("insert into standort (s_name, plz, ort, strasse, hausnummer) values (:s_name,:plz,:ort,:strasse,:hausnummer)", $standort);

        header('Location: /pm/standort/dashboard');
        exit;
    } else {
        core()->materialize()->toast("Standort ist schon vorhanden");
    }
}


core()->materialize()->addFixedNavElement("/pm/standort/dashboard", "Zurück", "call_missed", "black");
core()->materialize()->showFixedNavElement();
