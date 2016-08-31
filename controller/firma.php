<?php

/**
 * Distribute Controller for the Company
 * It's needed becouse of the clean URL
 * Redirect to new,delete, dashboard, look up company
 * 
 * @author Artur Stalbaum
 * @since 08.08.2016
 */
$request = core()->request()->getParams();

if (isset($request[2])) {
    switch ($request[2]) {
        case "neu":
            core()->page()->loadPage("firma_neu");
            core()->page()->loadController("firma_neu");
            break;
        case "dashboard":
            core()->page()->loadPage("firma_dashboard");
            core()->page()->loadController("firma_dashboard");
            break;
        case "bearbeiten":
            core()->materialize()->addFixedNavElement("/pm/firma/" . $request[3], "Zurück", "call_missed");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("firma_bearbeiten");
            if (is_numeric($request[3])) {
                loadCompany($request[3]);
            } else {
                core()->page()->loadController("firma_bearbeiten");
            }
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from firma where id ='" . $request[3] . "'", "fetch");
                if ($result) {
                    $fid = core()->db()->delete("delete from firma where id=" . $request[3]);
                    header('Location: /pm/firma/dashboard');
                    exit;
                }
            }
            break;
        case "budget":
            switch ($request[3]) {
                case "update":
                    if (isset($_POST["reg"])) {
                        if (!isset($_POST["reg"]["aktiv"])) {
                            $aktiv = 0;
                        } else {
                            $aktiv = 1;
                        }
                        $data["aktiv"] = $aktiv;
                        core()->db()->update("update firbudget set aktiv=:aktiv where id=" . $_POST["reg"]["id"], $data);
                        header('Location: /pm/firma/' . $_POST["reg"]["f_id"]);
                        exit;
                    }
                    break;
                case "loeschen":
                    if (isset($_POST["reg"])) {
                        core()->db()->delete("delete from firbudget where id=" . $_POST["reg"]["id"]);
                        header('Location: /pm/firma/dashboard');
                        exit;
                    }
                    break;
            }
            if (is_numeric($request[3])) {
                core()->smarty()->assign("f_id", $request[3]);
                core()->materialize()->addFixedNavElement("/pm/firma/" . $request[3], "Zurück", "call_missed");
                core()->page()->loadPage("budget_neu");
                core()->page()->loadController("budget_neu");
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);

        core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
        core()->materialize()->addFixedNavElement("/pm/firma/budget/" . $request[2], "Budget", "euro_symbol", "blue");
        core()->materialize()->addFixedNavElement("/pm/firma/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit", "green");
        core()->materialize()->addFixedNavElement("/pm/firma/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();
        loadCompany($request[2]);
    }
}

function loadCompany($id) {
    if ($id) {
        $firma = core()->db()->select("select * from firma where id = " . $id, "fetch");
        if ($firma) {
            $budgets = core()->db()->select("select * from firbudget where f_id = " . $firma->id);
            if (count($budgets) > 0) {
                core()->smarty()->assign("budgets", $budgets);
            }
            core()->smarty()->assign("firma", $firma);
        }
    }
}
