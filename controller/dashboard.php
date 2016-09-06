<?php

/**
 * Implements the Logic for the Dashboard
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
$user = $_SESSION["user"];

$antraege = core()->db()->select("select count(id) from projekt where e_id = " . $user->getId() . " and s_id = 1", "fetch", PDO::FETCH_NAMED);
core()->smarty()->assign("anzahl_antraege", $antraege["count(id)"]);

$antraege_genehmigt = core()->db()->select("select count(id) from projekt where e_id = " . $user->getId() . " and s_id between 2 and 4", "fetch", PDO::FETCH_NAMED);
core()->smarty()->assign("anzahl_genehmigte_antraege", $antraege_genehmigt["count(id)"]);

$antraege_abgelehnt = core()->db()->select("select count(id) from projekt where e_id = " . $user->getId() . " and s_id = 5 ", "fetch", PDO::FETCH_NAMED);
core()->smarty()->assign("anzahl_abgelehnter_antraege", $antraege_abgelehnt["count(id)"]);

$zu_gehnemigen = core()->db()->select("select projekt.id, projekt.titel FROM projekt,team,abteilung,mitarbeiter, standort, projstatus "
        . "WHERE (projekt.genehmigung_E1 = 0 AND projekt.a_id = abteilung.id AND abteilung.id = team.a_id AND team.t_leitung = " . $user->getId() . " AND projekt.s_id = 1) "
        . "OR ( projekt.genehmigung_E2 = 0 AND projekt.a_id = abteilung.id AND abteilung.a_leitung = " . $user->getId() . " AND projekt.s_id =1) "
        . "OR ( projekt.genehmigung_E3 = 0 AND projekt.a_id = abteilung.id AND abteilung.s_id = standort.id AND standort.s_leitung = " . $user->getId() . " AND projekt.s_id = 1) group by projekt.id");

if (count($zu_gehnemigen) > 0) {
    core()->smarty()->assign("zu_genehmigen", $zu_gehnemigen);
}