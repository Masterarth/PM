<?php

/**
 * Distribute Controller for "Department"
 * It's neeeded becouse of the clean URL
 * Redirect to new, dashboard, edit or delete functionality
 * 
 * @author Artur Stalbaum
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
            core()->materialize()->addFixedNavElement("/pm/abteilung/" . $request[3], "Zurück", "call_missed", "black");
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
        core()->materialize()->addFixedNavElement("/pm/abteilung/dashboard", "Zurück", "call_missed", "black");
        core()->materialize()->addFixedNavElement("/pm/abteilung/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit", "green");
        core()->materialize()->addFixedNavElement("/pm/abteilung/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();
        loadAbteilung($request[2]);
        core()->smarty()->assign("pic", core()->randomPic()->getPicture($request[2], "abteilung"));
    }
}

function loadAbteilung($id) {
    $abteilung = core()->db()->select("select a.*, m.vorname, m.nachname, s.s_name from abteilung a left join mitarbeiter m on m.id = a.a_leitung left join standort s on s.id = a.s_id where a.id = " . $id, "fetch");
    if ($abteilung) {
        core()->smarty()->assign("abteilung", $abteilung);
    }
}
