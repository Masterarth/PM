<?php

/**
 * Controller for the Stats Stuff
 *
 * @author Lukas Adler
 */
core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
core()->materialize()->showFixedNavElement();

$teams = core()->db()->select("select l.*,t.t_name,sum(pt.stunden) as ist_stunden from projteam pt, leistung l, team t where t.id = pt.t_id and l.t_id = pt.t_id group by l.t_id");
foreach ($teams as $key => $team) {
    $teams[$key]->summe = $team->max_stunden - $team->ist_stunden;
}
core()->smarty()->assign("teams", $teams);
core()->smarty()->assign("statistik", core()->stats());
