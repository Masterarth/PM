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
        case "update":
            switch ($request[3]) {
                case "aktiv":
                    core()->page()->loadController("update_aktiv");
                    break;
            }
    }
    if (is_numeric($request[2])) {

        core()->materialize()->addFixedNavElement("#", "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("#", "Löschen", "delete");
        core()->materialize()->showFixedNavElement();


        $user = core()->userhandler()->createUser($request[2]);

        if ($user) {
            core()->smarty()->assign("user", $user);
        }
    }
}
