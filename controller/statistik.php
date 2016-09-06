<?php

/**
 * Controller for the Stats Stuff
 *
 * @author Lukas Adler
 */
$request = core()->request()->getParams();

if (isset($request[1])) {
    switch ($request[1]) {
        case "statistik":
            core()->page()->loadController("statistik_anzeige");
            core()->page()->loadPage("statistik");
            $statistik = pm_stats::getInstance();
            core()->smarty()->assign("statistik", $statistik);
            core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
            core()->materialize()->showFixedNavElement();
            break;
        
        default :
            //DO Nothing
            break;
    }
}