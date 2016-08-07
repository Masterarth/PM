<?php

/**
 * Dashboard
 * @author Lukas Adler
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

core()->materialize()->pageTitle("teams");
core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "missed_call");
core()->materialize()->addFixedNavElement("/pm/team/neu", "Team anlegen", "mode_edit");
core()->materialize()->addFixedNavElement("#", "Suche", "search", "button-collapse hide-on-large-only", "data-activates='slide-out'");
core()->materialize()->showFixedNavElement();
