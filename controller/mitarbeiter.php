<?php

$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("mitarbeiter_neu");
            core()->page()->loadController("mitarbeiter_neu");
            break;
        case "dashboard":
            core()->page()->loadPage("mitarbeiter_dashboard");
            core()->page()->loadController("mitarbeiter_dashboard");
            break;
        case "bearbeiten":
            core()->materialize()->addFixedNavElement("/pm/mitarbeiter/" . $request[3], "Zurück", "call_missed");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("mitarbeiter_bearbeiten");
            if (is_numeric($request[3])) {
                $user = core()->userhandler()->createUser($request[3]);
                if ($user) {
                    core()->smarty()->assign("user", $user);
                }
            } else {
                core()->page()->loadController("mitarbeiter_bearbeiten");
            }
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from mitarbeiter where id ='" . $request[3] . "'", "fetch");
                if ($result) {
                    core()->db()->delete("delete from mitarbeiter where id=" . $request[3]);
                    core()->db()->delete("delete from users where id=" . $result->u_id);
                    header('Location: /pm/mitarbeiter/dashboard');
                    exit;
                }
            }
            break;
        case "update":
            switch ($request[3]) {
                case "aktiv":
                    core()->page()->loadController("mitarbeiter_update_aktiv");
                    break;
            }
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/dashboard", "Zurück", "call_missed");
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        $user = core()->userhandler()->createUser($request[2]);

        if ($user) {
            core()->smarty()->assign("user", $user);
        }
    }
}
