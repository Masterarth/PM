<?php
/**
 * Dashboard for the teams
 * 1. Read all teams from the Database
 * 2. Checks if there was a search request => Shows up the  
 * 
 * @author Artur Stalbaum
 * @since 04.08.2016
 */
if (isset($_POST["team_search"])) {
    if (is_numeric($_POST["team_search"])) {
        header('Location: /pm/team/' . $_POST["team_search"]);
        exit;
    } else {
        $teams = core()->db()->select("select * from team where concat_ws(' ',a_name,id) like '%" . $_POST["team_search"] . "%'");
    }
} else {
    $teams = core()->db()->select("select * from team t");
    if (count($teams) > 0) {
        core()->smarty()->assign("teams", $teams);
    }
}


core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed");
core()->materialize()->addFixedNavElement("/pm/team/neu", "Team anlegen", "mode_edit");
core()->materialize()->addFixedNavElement("#", "Suche", "search", "button-collapse hide-on-large-only", "data-activates='slide-out'");
core()->materialize()->showFixedNavElement();
