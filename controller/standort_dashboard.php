<?php

/**
 * Controller for the Dashboard of the Locations
 * 1. Read all Locations from the Database
 * 2. Search a Location in the Database (String)
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
if (isset($_POST["standort_search"])) {
    if (is_numeric($_POST["standort_search"])) {
        header('Location: /pm/standort/' . $_POST["standort_search"]);
        exit;
    } else {
        $standorte = core()->db()->select("select * from standort where concat_ws(' ',s_name,plz,ort,strasse,hausnummer) like '%" . $_POST["standort_search"] . "%'");
    }
} else {
    $standorte = core()->db()->select("select * from standort");
    if (count($standorte) > 0) {
        core()->smarty()->assign("standorte", $standorte);
    }
}


core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
core()->materialize()->addFixedNavElement("/pm/standort/neu", "Standort anlegen", "mode_edit", "green");
core()->materialize()->showFixedNavElement();
