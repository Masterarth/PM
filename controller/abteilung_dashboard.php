<?php

if (isset($_POST["abteilung_search"])) {
    if (is_numeric($_POST["abteilung_search"])) {
        header('Location: /pm/abteilung/' . $_POST["abteilung_search"]);
        exit;
    } else {
        $abteilungen = core()->db()->select("select * from abteilung where concat_ws(' ',b_name,b_leitung) like '%" . $_POST["abteilung_search"] . "%'");
    }
} else {
    $abteilungen = core()->db()->select("select a.*, m.vorname, m.nachname, s.s_name from abteilung a, mitarbeiter m, standort s where a.s_id = s.id and a.a_leitung = m.id");
}

if (count($abteilungen) > 0) {
    core()->smarty()->assign("abteilungen", $abteilungen);
}

core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed");
core()->materialize()->addFixedNavElement("/pm/abteilung/neu", "Bereich anlegen", "mode_edit");
core()->materialize()->showFixedNavElement();