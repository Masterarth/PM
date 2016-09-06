<?php

/**
 * Dashboard for the Departments
 * 1. Shows Up all departments from the Database
 * 2. Search in Database for Departments
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
if (isset($_POST["abteilung_search"])) {
    if (is_numeric($_POST["abteilung_search"])) {
        header('Location: /pm/abteilung/' . $_POST["abteilung_search"]);
        exit;
    } else {
        $abteilungen = core()->db()->select("select * from abteilung where concat_ws(' ',b_name,b_leitung) like '%" . $_POST["abteilung_search"] . "%'");
    }
} else {
    $abteilungen = core()->db()->select("select a.*, m.vorname, m.nachname, s.s_name from abteilung a left join mitarbeiter m on m.id = a.a_leitung left join standort s on s.id = a.s_id");
}

if (count($abteilungen) > 0) {
    foreach ($abteilungen as $key => $abteilung) {
        $abteilungen[$key]->pic = core()->randomPic()->getPicture($abteilung->id, "abteilung");
    }
    core()->smarty()->assign("abteilungen", $abteilungen);
}

core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
core()->materialize()->addFixedNavElement("/pm/abteilung/neu", "Bereich anlegen", "mode_edit", "green");
core()->materialize()->showFixedNavElement();
