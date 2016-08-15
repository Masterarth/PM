<?php
/**
 * Distribution Controller for the Location
 * It's needed becouse of the clean URL
 * Redirect to new, dashboard, edit, delete of locations
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("standort_neu");
            core()->page()->loadController("standort_neu");
            break;
        case "dashboard":
            core()->page()->loadPage("standort_dashboard");
            core()->page()->loadController("standort_dashboard");
            break;
        case "bearbeiten":
            core()->page()->loadPage("standort_bearbeiten");
            if (is_numeric($request[3])) {
                loadStandort($request[3]);
            } else {
                core()->page()->loadController("standort_bearbeiten");
            }
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from standort where id ='" . $request[3] . "'", "fetch");
                if ($result) {
                    $id = core()->db()->delete("delete from standort where id=" . $request[3]);
                    header('Location: /pm/standort/dashboard');
                    exit;
                }
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        
        core()->materialize()->addFixedNavElement("/pm/standort/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/standort/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        loadStandort($request[2]);
    }
}

function loadStandort($id) {
    if ($id) {
        $standort = core()->db()->select("select * from standort where id = " . $id, "fetch");
        if ($standort) {
            core()->smarty()->assign("standort", $standort);
        }
    }
}
