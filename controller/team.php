<?php

/**
 * Distribution Controller for the Team
 * It's needed becouse of the clean URL
 * Redirects to new, dashboad, edit, delete Team
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
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
                var_dump($result);
                if ($result) {
                    $id = core()->db()->delete("delete from team where id = " . $request[3]);
                    header('Location: /pm/team/dashboard');
                    exit;
                }
            }
            break;
        case "leistung":
            switch ($request[3]) {
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
                core()->materialize()->addFixedNavElement("/pm/team/" . $request[3], "Zurück", "call_missed", "black");
                $leistung = core()->db()->select("select id from leistung where t_id = " . $request[3], "fetch");
                if (!$leistung) {
                    core()->page()->loadPage("leistung_neu");
                    core()->page()->loadController("leistung_neu");
                } else {
                    core()->page()->loadPage("leistung_bearbeiten");
                    core()->page()->loadController("leistung_bearbeiten");
                }
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("/pm/team/dashboard", "Zurück", "call_missed", "black");
        core()->materialize()->addFixedNavElement("/pm/team/leistung/" . $request[2], "Leistung", "library_add", "blue");
        core()->materialize()->addFixedNavElement("/pm/team/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit", "green");
        core()->materialize()->addFixedNavElement("/pm/team/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        loadTeam($request[2]);
        core()->smarty()->assign("pic", core()->randomPic()->getPicture($request[2], "team"));
    }
}

function loadTeam($id) {
    if ($id) {
        $team = core()->db()->select("select * from team t "
                . "left join mitarbeiter m on m.id = t.t_leitung "
                . "left join abteilung a on t.a_id = a.id "
                . "left join standort s on s.id = a.s_id "
                . "left join leistung l on l.t_id = t.id "
                . "where t.id = " . $id, "fetch");
        if ($team) {
            core()->smarty()->assign("team", $team);
        }
        $leistung = core()->db()->select("select sum(p.stunden) from projteam p WHERE p.t_id=" . $team->id, "fetch", PDO::FETCH_ASSOC);
        core()->smarty()->assign("leistung", ($leistung["sum(p.stunden)"] > 0) ? $leistung["sum(p.stunden)"] : 0);
    }
}
