<?php

/**
 * Distribute Controller for the Proposal
 * It's needed becouse of the clean URL
 * Redirect to new, dashboard, look up Proposals
 * 
 * @author Artur Stalbaum
 * @since 08.08.2016
 * 
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
            core()->page()->loadPage("antrag_neu");
            core()->page()->loadController("antrag_neu");
            break;
        case "dashboard":
            core()->materialize()->addFixedNavElement("/pm/antrag/table", "tabellarische Ansicht", "border_all", "blue");
            core()->materialize()->addFixedNavElement("/pm/antrag/neu", "Antrag anlegen", "mode_edit", "green");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_dashboard");
            core()->page()->loadController("antrag_dashboard");
            break;
        case "table":
            core()->materialize()->addFixedNavElement("/pm/antrag/dashboard", "klassiche Ansicht", "dvr", "blue");
            core()->materialize()->addFixedNavElement("/pm/antrag/neu", "Antrag anlegen", "mode_edit", "green");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_table");
            core()->page()->loadController("antrag_table");
            break;
        case "loeschen":
            if (is_numeric($request[3])) {
                $result = core()->db()->select("select * from projekt where id=" . $request[3], "fetch");
                if ($result) {
                    core()->db()->delete("delete from projekt where id=" . $request[3]);
                    header('Location: /pm/antrag/dashboard');
                    exit;
                }
            }
            break;
        case "bearbeiten":
            if (isset($request[3])) {
                $projekt = loadProject($request[3]);
                core()->smarty()->assign("projekt", $projekt);
                core()->materialize()->addFixedNavElement("/pm/antrag/" . $request[3], "Zurück", "call_missed", "black");
                core()->materialize()->showFixedNavElement();
            }
            core()->page()->loadPage("antrag_bearbeiten");
            core()->page()->loadController("antrag_bearbeiten");
            break;
        case "pdf":
            if (is_numeric($request[3])) {
                $pdf = new pm_pdfcreator($request[3]);
                $pdf->createPdf();
            }
            break;
        case "genehmigen":
            if (isset($request[3]) && check($request[3])) {
                $data["e1"] = true;
                $data["e2"] = true;
                $data["e3"] = true;
                $data["status"] = 3;
                core()->db()->update("update projekt set genehmigung_E1=:e1, genehmigung_E2=:e2, genehmigung_E3=:e3, s_id=:status  where id = " . $request[3], $data);
            }
            header("Location: /pm/antrag/" . $request[3]);
            exit;
            break;
        case "ablehnen":
            if (isset($request[3]) && check($request[3])) {
                $data["e1"] = false;
                $data["e2"] = false;
                $data["e3"] = false;
                $data["status"] = 5;
                core()->db()->update("update projekt set genehmigung_E1=:e1, genehmigung_E2=:e2, genehmigung_E3=:e3, s_id=:status  where id = " . $request[3], $data);
            }
            header("Location: /pm/antrag/" . $request[3]);
            exit;
            break;
        case "capitalmethod":
            if (is_numeric($request[3])) {
                $projekt = loadProject($request[3]);
                foreach ($projekt->getCapitalflow() as $key => $capitalValue) {
                    $data[$key] = $capitalValue->getArray($request[3]);
                    if ($key > 0) {
                        $data[$key]["ein"] = $data[$key]["ein"] + $data[$key - 1]["ein"];
                        $data[$key]["aus"] = $data[$key]["aus"] + $data[$key - 1]["aus"];
                    }
                }
                echo json_encode($data, JSON_NUMERIC_CHECK);
                exit;
            }
            break;
    }
    if (is_numeric($request[2])) {
        core()->materialize()->parallax(true);
        core()->materialize()->addFixedNavElement("/pm/antrag/dashboard/", "Zurück", "call_missed", "black");
        core()->materialize()->addFixedNavElement("/pm/antrag/pdf/" . $request[2], "PDF export", "picture_as_pdf", "blue", null, "target='_blank'");
        core()->materialize()->addFixedNavElement("/pm/antrag/bearbeiten/" . $request[2], "Bearbeiten", "mode_edit", "green");
        core()->materialize()->addFixedNavElement("/pm/antrag/loeschen/" . $request[2], "Löschen", "delete");
        core()->materialize()->showFixedNavElement();

        (check($request[2])) ? $genehmigen = true : $genehmigen = false;

        $projekt = loadProject($request[2]);
        $capitalMethod = new pm_capitalvaluemethod(count($projekt->getCapitalflow()), null, $projekt->getCapitalRent(), $projekt->getMonesEarnings(), $projekt->getCapitalflow());
        core()->smarty()->assign("capitalMethod", $capitalMethod);
        core()->smarty()->assign("projekt", $projekt);
        core()->smarty()->assign("zuGenehmigen", $genehmigen);
    }
}

function loadProject($id) {
    $projekt = new pm_projekt();
    $projekt->load($id);
    return $projekt;
}

function check($pid) {
    $user = $_SESSION["user"];
    $zu_gehnemigen = core()->db()->select("select projekt.id, projekt.titel FROM projekt,team,abteilung,mitarbeiter, standort, projstatus "
            . "WHERE (projekt.genehmigung_E1 = 0 AND projekt.a_id = abteilung.id AND abteilung.a_leitung = " . $user->getId() . " AND projekt.s_id =1 and projekt.id =" . $pid . ") "
            . "OR ( projekt.genehmigung_E2 = 0 AND projekt.a_id = abteilung.id AND abteilung.a_leitung = " . $user->getId() . " AND projekt.s_id =1 and projekt.id =" . $pid . ") "
            . "OR ( projekt.genehmigung_E3 = 0 AND projekt.a_id = abteilung.id AND abteilung.s_id = standort.id AND standort.s_leitung = " . $user->getId() . " AND projekt.s_id = 1 and projekt.id =" . $pid . ") GROUP BY projekt.id", "fetch");
    return $zu_gehnemigen;
}
