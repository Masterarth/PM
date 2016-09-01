<?php

/**
 * Creates a new Proposal and saves it into the Database
 * Following Functions are included:
 * 1. Auto Complete for "Department" and "Project Manager"
 * 2. Save the Basis Informations
 * 3. Save Indicators (if they are defined)
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
core()->materialize()->addFixedNavElement("/pm/antrag/uebersicht", "Zurück", "call_missed", "black");
core()->materialize()->showFixedNavElement();

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

//$abteilungen = core()->db()->select("select * from abteilung");
//$teams = core()->db()->select("select * from team");
//
//foreach ($abteilungen as $abteilung) {
//    $places[$abteilung->id]["abteilung"] = $abteilung;
//    foreach ($teams as $team) {
//        if ($team->id == $team->a_id) {
//            $places[$abteilung->id]["teams"][$team->id] = $team;
//        }
//    }
//}
//core()->smarty()->assign("grp", $grp);


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

    if (isset($_POST["reg"]["sollkosten"])) {
        $kosten = $_POST["reg"]["sollkosten"];
        switch ($kosten) {
            case $kosten <= 5000:
                $projectAntragArray["genehm_E1"] = 0;
                $projectAntragArray["genehm_E2"] = 1;
                $projectAntragArray["genehm_E3"] = 1;
                break;
            case $kosten <= 25000:
                $projectAntragArray["genehm_E1"] = 0;
                $projectAntragArray["genehm_E2"] = 0;
                $projectAntragArray["genehm_E3"] = 1;
                break;
            case $kosten <= 50000:
                $projectAntragArray["genehm_E1"] = 0;
                $projectAntragArray["genehm_E2"] = 0;
                $projectAntragArray["genehm_E3"] = 0;
                break;
            //case > 50000?
            // was soll hier passieren weil in ppt steht >50k = gf 
        }
    }

    //Standard Informationen
    $projectAntragArray["p_titel"] = $_POST["reg"]["projectname"];
    $projectAntragArray["vor_sta_datum"] = $_POST["reg"]["sollstartdatum"];
    $projectAntragArray["vor_end_datum"] = $_POST["reg"]["sollenddatum"];
    $projectAntragArray["beschreibung"] = $_POST["reg"]["kurzbeschreibung"];
    $projectAntragArray["rahmbeding"] = $_POST["reg"]["rahmenbedingungen"];
    $projectAntragArray["komm_konz"] = $_POST["reg"]["kommunikation"];
    $projectAntragArray["nicht_ziel"] = $_POST["reg"]["nichtZiele"];
    $projectAntragArray["p_erstelldatum"] = date("Y-m-d");

    $projectAntragArray["e_id"] = $_SESSION["user"]->getId();
    $projectAntragArray["a_id"] = (isset($_POST["reg"]["abteilung"])) ? $_POST["reg"]["abteilung"] : null;
    $projectAntragArray["l_id"] = (isset($_POST["reg"]["leiter"])) ? $_POST["reg"]["leiter"] : null;
    $projectAntragArray["s_id"] = 1;

    //Zielkreuzmethode
    $projectAntragArray["p_ziel1"] = $_POST["reg"]["kreuzwozu"];
    $projectAntragArray["p_ziel2"] = $_POST["reg"]["kreuzwas"];
    $projectAntragArray["p_ziel3"] = $_POST["reg"]["kreuzwiegut"];
    $projectAntragArray["p_ziel4"] = $_POST["reg"]["kreuzfuerwen"];

    //Kosten/Nutzen
    $projectAntragArray["mon_kosten"] = $_POST["reg"]["sollkosten"];
    $projectAntragArray["mon_nutzen"] = $_POST["reg"]["sollnutzen"];
    $projectAntragArray["kap_kosten"] = (isset($_POST["reg"]["kapitalwert"]["kosten"])) ? $_POST["reg"]["kapitalwert"]["kosten"] : null;


    //Nachkalkulation / IstWerte
    $projectAntragArray["tat_sta_datum"] = $_POST["reg"]["iststartdatum"];
    $projectAntragArray["tat_end_datum"] = $_POST["reg"]["istenddatum"];

    $pid = core()->db()->update(
            "insert into projekt (titel,auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2,genehmigung_E3,p_ziel1,p_ziel2,p_ziel3,p_ziel4,nicht_ziel,rahmbeding,p_system,komm_konz,risiko,beschreibung,tat_sta_term,tat_end_term,vor_sta_term,vor_end_term,nutzen,amorti_zeit,bemerkung,mon_kosten,mon_nutzen,kap_kosten, e_id, a_id, l_id,b_id,s_id) "
            . "values(:p_titel,:p_auftraggeber,:p_erstelldatum,:genehm_E1,:genehm_E2,:genehm_E3,:p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:komm_konz,:risiko,:beschreibung,:tat_sta_datum,:tat_end_datum,:vor_sta_datum,:vor_end_datum,:nutzen,:amorti_zeit,:bemerkung,:mon_kosten,:mon_nutzen,:kap_kosten,:e_id, :a_id, :l_id, :b_id,:s_id)", $projectAntragArray);

    if (isset($_POST["reg"]["kapitalwert"])) {
        foreach ($_POST["reg"]["kapitalwert"]["data"] as $value) {
   
            $value["p_id"] = $pid;
            $value["zins"] = (isset($_POST["reg"]["kapitalwert"]["zins"])) ? $_POST["reg"]["kapitalwert"]["zins"] : null;

            $kid = core()->db()->update("insert into kapitalwerte (p_id,jahr,zinssatz,einzahlung,auszahlung) values (:p_id,:jahr,:zins,:ein,:aus)", $value);
        }
    }

    if (isset($_POST["reg"]["meilensteine"])) {
        foreach ($_POST["reg"]["meilensteine"] as $value) {

            $value["p_id"] = $pid;
            $value["checked"] = (isset($value["checked"])) ? 1 : 0;
            $mid = core()->db()->update("insert into meilensteine (p_id,ms_nummer,meilenstein,erfuellt) values(:p_id,:nr,:beschreibung,:checked)", $value);
        }
    }

    if (isset($_POST["reg"]["leistung"])) {
        foreach ($_POST["reg"]["leistung"] as $value) {
            $value["p_id"] = $pid;
            if (isset($value["abteilung"])) {
                $tid = core()->db()->update("insert into projteam (t_id,p_id,stunden) values(:abteilung,:p_id,:wert)", $value);
            }
        }
    }

    header('Location: /pm/antrag/' . $pid);
    exit;
}
