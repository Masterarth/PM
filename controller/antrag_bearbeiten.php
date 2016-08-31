<?php

$abteilungen = core()->db()->select("select * from abteilung");
$standorte = core()->db()->select("select * from standort");

foreach ($standorte as $standort) {
    $places[$standort->id]["standort"] = $standort;
    foreach ($abteilungen as $abteilung) {
        if ($standort->id == $abteilung->s_id) {
            $places[$standort->id]["abteilungen"][$abteilung->id] = $abteilung;
        }
    }
}
core()->smarty()->assign("places", $places);

//where bedinungen muss noch ausprogrammiert werden:
//where rolle = teamleiter bzw. höher ? 
$mitarbeiter = core()->db()->select("select * from mitarbeiter where r_id = 3");
core()->smarty()->assign("mitarbeiter", $mitarbeiter);

if (isset($_POST["reg"])) {

    //TODO: UPDATE des Antrags machen !
}
