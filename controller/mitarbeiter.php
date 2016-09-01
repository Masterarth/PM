<?php

/**
 * Distribute Controller for the Employee
 * Redirect to new, dashboard, edit, delete Employees
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 * 
 * Adding the Edit Function
 * 
 * @author Lukas Adler
 * @since 23.08.2016
 */
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
            core()->materialize()->addFixedNavElement("/pm/mitarbeiter/" . $request[3], "Zurück", "call_missed", "black");
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
            core()->page()->loadController("mitarbeiter_loeschen");
            core()->page()->loadPage("mitarbeiter_loeschen");
            break;
        case "update":
            switch ($request[3]) {
                case "aktiv":
                    core()->page()->loadController("mitarbeiter_update_aktiv");
                    break;
                case "rolle":
                    core()->page()->loadController("mitarbeiter_update_rolle");
                    break;
            }
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/dashboard", "Zurück", "call_missed", "black");
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit", "green");
        core()->materialize()->addFixedNavElement("/pm/mitarbeiter/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        $user = core()->userhandler()->createUser($request[2]);

        if ($user) {
            $pic = core()->randomPic()->getPicture($user->getId(), "mitarbeiter");
            core()->smarty()->assign("pic", $pic);
            core()->smarty()->assign("user", $user);
            $rollen = core()->db()->select("select * from rolle");
            core()->smarty()->assign("rollen", $rollen);
        }
    }
}
