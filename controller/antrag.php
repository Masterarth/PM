<?php

/**
 * Distribute Controller for the Proposal
 * It's needed becouse of the clean URL
 * Redirect to new, dashboard, look up Proposals
 * 
 * @author Artur Stalbaum
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
            core()->materialize()->addFixedNavElement("/pm/antrag/neu", "Antrag anlegen", "mode_edit", "green");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_dashboard");
            core()->page()->loadController("antrag_dashboard");
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
        case "pdf":
            if (is_numeric($request[3])) {
                $pdf = new pm_pdfcreator($request[3]);
                $pdf->createPdf();
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