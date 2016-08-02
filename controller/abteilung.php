<?php

$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("abteilung_neu");
            core()->page()->loadController("abteilung_neu");
            break;
        case "dashboard":
            core()->page()->loadPage("abteilung_dashboard");
            core()->page()->loadController("abteilung_dashboard");
            break;
        case "update":
//            switch ($request[3]) {
//                case "aktiv":
//                    core()->page()->loadController("update_aktiv");
//                    break;
//            }
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("#", "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("#", "Löschen", "delete");
        core()->materialize()->showFixedNavElement();
        $abteilung = core()->db()->select("select a.*, m.vorname, m.nachname, s.s_name from abteilung a, mitarbeiter m, standort s where a.id = " . $request[2] . " and a.a_leitung = m.id and a.s_id = s.id", "fetch");

        if ($abteilung) {
            core()->smarty()->assign("abteilung", $abteilung);
        }
    }
}


