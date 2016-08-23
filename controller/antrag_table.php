<?php
/**
 * Reads the Informations for the Table Structure
 *
 * @author Lukas Adler
 */

$projekte = core()->db()->select("select p.*, a.a_name, s.s_name from projekt as p "
            . "left join abteilung as a on a.id = p.a_id "
            . "left join standort as s on s.id = a.s_id");

if ($projekte != null) {
    core()->smarty()->assign("projekte", $projekte);
}

