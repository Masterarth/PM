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

    $projectAntragArray = array(
        'p_titel' => null,
        'p_auftraggeber' => null,
        'bemerkung' => null,
        'p_ziel1' => null,
        'p_ziel2' => null,
        'p_ziel3' => null,
        'p_ziel4' => null,
        'nicht_ziel' => null,
        'amorti_zeit' => null,
        'genehm_E1' => 0,
        'genehm_E2' => 0,
        'genehm_E3' => 0,
        'rahmbeding' => null,
        'beschreibung' => null,
        'nutzen' => null,
        'tat_sta_datum' => null,
        'tat_end_datum' => null,
        'vor_sta_datum' => null,
        'vor_end_datum' => null,
        'risiko' => null,
        'komm_konz' => null,
        'p_system' => null,
        'p_erstelldatum' => null,
        'mon_kosten' => null,
        'mon_nutzen' => null,
        'kap_kosten' => null,
        'e_id' => null,
        'a_id' => null,
        'l_id' => null,
        'mon_kosten' => null,
        'mon_nutzen' => null,
        'kap_kosten' => null,
        'b_id' => null,
        's_id' => null
    );

    var_dump($_POST["reg"]);
}
