<?php

/**
 * Changeing the Controlling Structur and adding new Controller Classes to
 * handle the project request
 * 
 * @author Lukas Adler
 * @since 08.08.2016
 * 
 */
$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("antrag_neu");
            core()->page()->loadController("antrag_neu");
            break;
        case "dashboard":
            core()->materialize()->addFixedNavElement("/pm/antrag/neu", "Antrag anlegen", "mode_edit");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_dashboard");
            core()->page()->loadController("antrag_dashboard");
            break;
    }

    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);

        core()->materialize()->addFixedNavElement("/pm/antrag/dashboard/", "Zurück", "call_missed");
        core()->materialize()->addFixedNavElement("/pm/antrag/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/antrag/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        $projekt = core()->db()->select("select p.*, a.a_name, a.s_id, s.s_name from projekt p "
                . "left join abteilung a on a.id = p.a_id "
                . "left join standort s on s.id = a.s_id where p.id = " . $request[2], "fetch");

        if ($projekt) {
            core()->smarty()->assign("projekt", $projekt);
            if ($projekt->e_id) {
                $ersteller = core()->db()->select("select * from mitarbeiter where id = " . $projekt->e_id, "fetch");
                if ($ersteller) {
                    core()->smarty()->assign("ersteller", $ersteller);
                }
            }
        }
    }
}