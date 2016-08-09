<?php

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
            if (is_numeric($request[3])) {
                core()->smarty()->assign("f_id", $request[3]);
                core()->materialize()->addFixedNavElement("/pm/firma/" . $request[3], "Zurück", "call_missed");
                $firma = core()->db()->select("select * from firma where id = " . $request[3], "fetch");
                if (!isset($firma->budget_id)) {
                    core()->page()->loadPage("budget_neu");
                    if (isset($_POST["reg"])) {
                        core()->page()->loadController("budget_neu");
                    }
                } else {
                    $budget = core()->db()->select("select * from budget where id = " . $firma->budget_id, "fetch");
                    core()->page()->loadPage("budget_bearbeiten");
                    core()->smarty()->assign("firma", $firma);
                    core()->smarty()->assign("budget", $budget);
                    if (isset($_POST["reg"])) {
                        core()->page()->loadController("budget_bearbeiten");
                    }
                }
            }
            break;
    }
    if (is_numeric($request[2])) {

        core()->materialize()->parallax(true);
        
        core()->materialize()->addFixedNavElement("/pm/firma/dashboard", "Zurück", "call_missed");
        core()->materialize()->addFixedNavElement("/pm/firma/budget/" . $request[2], "Budget", "library_add");
        core()->materialize()->addFixedNavElement("/pm/firma/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit");
        core()->materialize()->addFixedNavElement("/pm/firma/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();
        loadCompany($request[2]);
    }
}

function loadCompany($id) {
    if ($id) {
        $firma = core()->db()->select("select * from firma where id = " . $id, "fetch");
        if ($firma) {
            core()->smarty()->assign("firma", $firma);
        }
    }
}
