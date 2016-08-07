<?php

$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->materialize()->pageTitle("team");
            core()->page()->loadPage("team_neu");
            core()->page()->loadController("team_neu");
            break;
        case "dashboard":
            core()->materialize()->pageTitle("teams");
            core()->materialize()->addFixedNavElement("/pm/team/neu", "Team anlegen", "mode_edit");
            core()->materialize()->addFixedNavElement("#", "Suche", "search", "button-collapse hide-on-large-only", "data-activates='slide-out'");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("team_dashboard");
            core()->page()->loadController("team_dashboard");
            break;
        case "bearbeiten":
            core()->materialize()->pageTitle("team");
            core()->materialize()->addFixedNavElement("/pm/team/" . $request[3], "Zurück", "call_missed");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("team_bearbeiten");
            if (is_numeric($request[3])) {
                $abteilungen = core()->db()->select("select * from abteilung,standort where abteilung.s_id=standort.id");
                core()->smarty()->assign("abteilungen", $abteilungen);
                loadTeam($request[3]);
            } else {
                core()->page()->loadController("team_bearbeiten");
            }
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from team where id = '" . $request[3] . "'", "fetch");
                if ($result) {
                    $id = core()->db()->delete("delete from team where id = " . $request[3]);
                    header('Location: /pm/team/dashboard');
                    exit;
                }
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->pageTitle("team");
        core()->materialize()->addFixedNavElement("/pm/team/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/team/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        loadTeam($request[2]);
    }
}

function loadTeam($id) {
    if ($id) {
        $team = core()->db()->select("select * from team t, mitarbeiter m, abteilung a, standort s where t.id = " . $id . " and t.t_leitung = m.id and t.a_id = a.id and a.s_id = s.id", "fetch");
        if ($team) {
            core()->smarty()->assign("team", $team);
        }
    }
}
