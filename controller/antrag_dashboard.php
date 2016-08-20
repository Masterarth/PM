<?php
/**
 * 1. Shows up all Proposals from the Database
 * 2. Search in the Database for Proposals (Filter Functions)
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


if (isset($_POST["antrag_search"])) {
    if (is_numeric($_POST["antrag_search"])) {
        header('Location: /pm/antrag/' . $_POST["antrag_search"]);
        exit;
    } else {
        $projekte = core()->db()->select("select * from projekt where concat_ws(' ',titel,p_nummer) like '%" . $_POST["antrag_search"] . "%'");
    }
} else {
    $projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
            . "left join abteilung as a on a.id = p.a_id "
            . "left join standort as s on s.id = a.s_id");
}

if ($projekte != null) {
    core()->smarty()->assign("projekte", $projekte);
}


