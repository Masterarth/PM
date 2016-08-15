<?php
/**
 * Distribute Controller for "Department"
 * It's neeeded becouse of the clean URL
 * Redirect to new, dashboard, edit or delete functionality
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */


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
        case "bearbeiten":
            core()->materialize()->addFixedNavElement("/pm/abteilung/" . $request[3], "Zurück", "call_missed");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("abteilung_bearbeiten");
            if (is_numeric($request[3])) {
                $standorte = core()->db()->select("select * from standort");
                core()->smarty()->assign("standorte", $standorte);
                loadAbteilung($request[3]);
            } else {
                core()->page()->loadController("abteilung_bearbeiten");
            }
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from abteilung where id ='" . $request[3] . "'", "fetch");
                if ($result) {
                    $fid = core()->db()->delete("delete from abteilung where id=" . $request[3]);
                    header('Location: /pm/abteilung/dashboard');
                    exit;
                }
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("/pm/abteilung/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/abteilung/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();
        loadAbteilung($request[2]);
    }
}

function loadAbteilung($id) {
    $abteilung = core()->db()->select("select a.*, m.vorname, m.nachname, s.s_name from abteilung a, mitarbeiter m, standort s where a.id = " . $id . " and a.a_leitung = m.id and a.s_id = s.id", "fetch");

    if ($abteilung) {
        core()->smarty()->assign("abteilung", $abteilung);
    }
}
