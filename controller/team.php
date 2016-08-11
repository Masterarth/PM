<?php

$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("team_neu");
            core()->page()->loadController("team_neu");
            break;
        case "dashboard":

            core()->page()->loadPage("team_dashboard");
            core()->page()->loadController("team_dashboard");
            break;
        case "bearbeiten":
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
        case "leistung":
            switch ($request[3]) {
                case "update":
                    if (isset($_POST["reg"])) {
                        if (!isset($_POST["reg"]["aktiv"])) {
                            $aktiv = 0;
                        } else {
                            $aktiv = 1;
                        }
                        $data["aktiv"] = $aktiv;
                        core()->db()->update("update firbudget set aktiv=:aktiv where id=" . $_POST["reg"]["id"], $data);
                        header('Location: /pm/firma/' . $_POST["reg"]["f_id"]);
                        exit;
                    }
                    break;
                case "loeschen":
                    if (isset($_POST["reg"])) {
                        core()->db()->delete("delete from firbudget where id=" . $_POST["reg"]["id"]);
                        header('Location: /pm/firma/dashboard');
                        exit;
                    }
                    break;
            }
            if (is_numeric($request[3])) {
                core()->smarty()->assign("t_id", $request[3]);
                core()->materialize()->addFixedNavElement("/pm/team/" . $request[3], "Zurück", "call_missed");
                core()->page()->loadPage("leistung_neu");
                core()->page()->loadController("leistung_neu");
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);

        core()->materialize()->addFixedNavElement("/pm/team/leistung/" . $request[2], "Budget", "library_add");
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
