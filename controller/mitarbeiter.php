<?php

$request = core()->request()->getParams();

core()->materialize()->addFixedNavElement("/pm/mitarbeiter/dashboard", "Mitarbeiter Übersicht", "list");
core()->materialize()->addFixedNavElement("/pm/mitarbeiter/suche", "Mitarbeiter suchen", "search");
core()->materialize()->addFixedNavElement("/pm/mitarbeiter/neu", "Mitarbeiter anlegen", "mode_edit");
core()->materialize()->showFixedNavElement();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("mitarbeiter_neu");
            core()->page()->loadController("mitarbeiter_neu");
            break;
        case "suche":
            core()->page()->loadPage("mitarbeiter_suche");
            core()->page()->loadController("mitarbeiter_suche");
            break;
        case "dashboard":
            core()->page()->loadPage("mitarbeiter_dashboard");
            core()->page()->loadController("mitarbeiter_dashboard");
            break;
        case "update":
            switch ($request[3]) {
                case "aktiv":
                    core()->page()->loadController("update_aktiv");
                    break;
            }
    }
    if (is_numeric($request[2])) {

        $user = core()->userhandler()->createUser($request[2]);

        if ($user) {
            core()->smarty()->assign("user", $user);
        }
    }
}
