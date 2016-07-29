<?php

$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("antrag_neu");
            break;
        case "uebersicht":
            core()->materialize()->addFixedNavElement("/pm/antrag/neu", "Antrag anlegen", "mode_edit");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_uebersicht");
            core()->page()->loadController("antrag_uebersicht");
            break;
    }
}