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
        case "bearbeiten":
            core()->materialize()->addFixedNavElement("/pm/antrag/" . $request[3], "Zurück", "call_missed");
            core()->materialize()->showFixedNavElement();
            core()->page()->loadPage("antrag_bearbeiten");

            if (is_numeric($request[3])) {
                $projekt = core()->db()->select("select * from projekt where projekt.id=" . $request[3], "fetch");
                core()->smarty()->assign("projekt", $projekt);
                loadProject($request[3],$projekt);
            } else {
                core()->page()->loadController("antrag_bearbeiten");
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

        $projekt = core()->db()->select("select "
                . "p.*,"
                . "ps.status,"
                . "b1.betrag as tat_budget,"
                . "b1.aktiv as tat_aktiv,"
                . "b2.betrag as plan_budget,"
                . "b2.aktiv as plan_aktiv,"
                . "a.a_name,"
                . "a.s_id,"
                . "s.s_name,"
                . "m.vorname, m.nachname "
                . "from projekt p "
                . "left join abteilung a on a.id = p.a_id "
                . "left join standort s on s.id = a.s_id "
                . "left join projstatus ps on ps.id = p.s_id "
                . "left join probudget b1 on b1.id = p.tat_budget_id "
                . "left join probudget b2 on b2.id = p.plan_budget_id "
                . "left join mitarbeiter m on m.id = p.e_id "
                . "where p.id = " . $request[2], "fetch");

        if ($projekt) {
            core()->smarty()->assign("projekt", $projekt);
            $arbeitspakete = core()->db()->select("select * from arbeitspakete where p_id = " . $projekt->id);
            if (count($arbeitspakete) > 0) {
                core()->smarty()->assign("arbeitspakete", $arbeitspakete);
            }
            $kapitalwerte = core()->db()->select("select * from kapitalwerte where p_id = " . $projekt->id);
            if (count($kapitalwerte) > 0) {
                core()->smarty()->assign("kapitalwerte", $kapitalwerte);
            }
            $meilensteine = core()->db()->select("select * from meilensteine where p_id = " . $projekt->id);
            if (count($meilensteine) > 0) {
                core()->smarty()->assign("meilensteine", $meilensteine);
            }
            $projektteam = core()->db()->select("select * from projteam p "
                    . "left join team t on t.id = p.t_id "
                    . "where p.p_id = " . $projekt->id);
            if (count($projektteam) > 0) {
                core()->smarty()->assign("projektteam", $projektteam);
            }
        }
    }
}

/**
 * Load all Project Data Informations
 * @param int $id
 */
function loadProject($id,$projekt) {
    if (is_numeric($id)) {

        $abteilungen = core()->db()->select("select * from abteilung,standort where abteilung.s_id=standort.id");
        core()->smarty()->assign("abteilungen", $abteilungen);
        
        $aktAbt = core()->db()->select("select * from abteilung, standort where abteilung.s_id=standort.id AND abteilung.id=".$projekt->a_id,"fetch");
        core()->smarty()->assign("aktAbt",$aktAbt);
        
        $mitarbeiter = core()->db()->select("select * from mitarbeiter where r_id = 3");
        core()->smarty()->assign("mitarbeiter", $mitarbeiter);
        
        $prjLeader = core()->db()->select("select * from mitarbeiter where mitarbeiter.id=".$projekt->l_id,"fetch");
        core()->smarty()->assign("prjLeader",$prjLeader);

        $ms = core()->db()->select("select * from meilensteine where meilensteine.p_id=" . $id);
        $kw = core()->db()->select("select * from kapitalwerte where kapitalwerte.p_id=" . $id);

        if ($ms != null) {
            core()->smarty()->assign("ms", $ms);
        }

        if ($kw != null) {
            core()->smarty()->assign("kw", $kw);
        }
    }
}
