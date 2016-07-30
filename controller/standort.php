<?php

$request = core()->request()->getParams();


if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("standort_neu");
            core()->page()->loadController("standort_neu");
            break;
        case "dashboard":
            core()->materialize()->addFixedNavElement("/pm/standort/neu", "Standort anlegen", "mode_edit");
            core()->materialize()->showFixedNavElement();
            core()->smarty()->assign("pageTitle","Standorte");
            core()->page()->loadPage("standort_dashboard");
            core()->page()->loadController("standort_dashboard");
            break;
        case "update":
//            switch ($request[3]) {
//                case "aktiv":
//                    core()->page()->loadController("update_aktiv");
//                    break;
//            }
    }
    if (is_numeric($request[2])) {

        core()->materialize()->addFixedNavElement("#", "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("#", "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        $standort = core()->db()->select("select * from standort where id = " . $request[2], "fetch");

        if ($standort) {
            core()->smarty()->assign("standort", $standort);
        }
    }
}


