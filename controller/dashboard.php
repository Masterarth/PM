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

$meine_projekte = core()->db()->select("select * from projekt where l_id = " . $user->getId() . " or e_id =" . $user->getId() . " and s_id between 1 and 3");
if (count($meine_projekte) > 0) {
    core()->smarty()->assign("meine_projekte", $meine_projekte);
}

$zu_gehnemigen = core()->db()->select("select p.* from projekt p"
        . " left join abteilung a on a.id = p.a_id"
        . " left join standort s on s.id = a.s_id"
        . " left join firma f on f.id = s.f_id"
        . " where f.f_leitung =" . $user->getId() . " and s.s_leitung =" . $user->getId() . " and a.a_leitung = " . $user->getId() . " and p.s_id = 1");

if (count($zu_gehnemigen) > 0) {
    core()->smarty()->assign("zu_genehmigen", $zu_gehnemigen);
}