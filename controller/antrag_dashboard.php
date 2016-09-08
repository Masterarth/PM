<?php

/**
 * 1. Shows up all Proposals from the Database
 * 2. Search in the Database for Proposals (Filter Functions)
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
//Default: own projects
$_SESSION["antragFilter"] = "ownProjects";
$_SESSION["antrag_search"] = null;

$user = $_SESSION["user"];
if (isset($_POST["antrag_search"])) {
    if (is_numeric($_POST["antrag_search"])) {
        header('Location: /pm/antrag/' . $_POST["antrag_search"]);
        exit;
    } else {
        $_SESSION["antrag_search"] = $_POST["antrag_search"];
        $_SESSION["antragFilter"] = $_POST["projectFilter"];
        switch ($_POST["projectFilter"]) {
            case "ownProjects":
                $projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
                        . "left join abteilung as a on a.id = p.a_id "
                        . "left join standort as s on s.id = a.s_id "
                        . "where (concat_ws(' ',p.titel,p.id,p.auftraggeber,p.p_ziel3,p.beschreibung) like '%" . $_POST["antrag_search"] . "%') and p.e_id = " . $user->getId());
                break;
            case "allProjects":
                $projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
                        . "left join abteilung as a on a.id = p.a_id "
                        . "left join standort as s on s.id = a.s_id "
                        . "where concat_ws(' ',p.titel,p.id,p.auftraggeber,p.p_ziel3,p.beschreibung) like '%" . $_POST["antrag_search"] . "%'");
                break;
        }
    }
} else {
    switch ($_SESSION["antragFilter"]) {
        case "ownProjects":
            $projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
                    . "left join abteilung as a on a.id = p.a_id "
                    . "left join standort as s on s.id = a.s_id where e_id = " . $user->getId());
            break;
        case "allProjects":
            $projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
                    . "left join abteilung as a on a.id = p.a_id "
                    . "left join standort as s on s.id = a.s_id");
            break;
    }
}

foreach ($projekte as $key => $projekt) {
    $projekte[$key]->pic = core()->randomPic()->getPicture($projekt->id, "projekt");
}

if ($projekte != null) {
    core()->smarty()->assign("projekte", $projekte);
}


