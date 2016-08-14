<?php

$abteilungen = core()->db()->select("select * from abteilung,standort where abteilung.s_id=standort.id");
core()->smarty()->assign("abteilungen", $abteilungen);

//where bedinungen muss noch ausprogrammiert werden:
//where rolle = teamleiter bzw. höher ? 
$mitarbeiter = core()->db()->select("select * from mitarbeiter");
core()->smarty()->assign("mitarbeiter", $mitarbeiter);

$mitarbeiters = core()->db()->select("select * from users");
core()->smarty()->assign("mitarbeiter", $mitarbeiters);

if (isset($_POST["reg"])) {

    $projectAntragArray = array(
        'p_auftraggeber' => null,
        'p_titel' => null,
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
        'b_id' => null
    );

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
    $projectAntragArray["a_id"] = $_POST["reg"]["abteilung"];
    $projectAntragArray["l_id"] = $_POST["reg"]["leiter"];

//Zielkreuzmethode
    $projectAntragArray["p_ziel1"] = $_POST["reg"]["kreuzwozu"];
    $projectAntragArray["p_ziel2"] = $_POST["reg"]["kreuzwas"];
    $projectAntragArray["p_ziel3"] = $_POST["reg"]["kreuzwiegut"];
    $projectAntragArray["p_ziel4"] = $_POST["reg"]["kreuzfuerwen"];

//Kosten/Nutzen
    $projectAntragArray["mon_kosten"] = $_POST["reg"]["sollkosten"];
    $projectAntragArray["mon_nutzen"] = $_POST["reg"]["sollnutzen"];
    $projectAntragArray["kap_kosten"] = $_POST["reg"]["kostenKapitalwert"];


    //Nachkalkulation / IstWerte
    $projectAntragArray["tat_sta_datum"] = $_POST["reg"]["iststartdatum"];
    $projectAntragArray["tat_end_datum"] = $_POST["reg"]["istenddatum"];

    $pid = core()->db()->update(
            "insert into projekt (titel,auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2,genehmigung_E3,p_ziel1,p_ziel2,p_ziel3,p_ziel4,nicht_ziel,rahmbeding,p_system,komm_konz,risiko,beschreibung,tat_sta_term,tat_end_term,vor_sta_term,vor_end_term,nutzen,amorti_zeit,bemerkung,mon_kosten,mon_nutzen,kap_kosten, e_id, a_id, l_id,b_id) "
            . "values(:p_titel,:p_auftraggeber,:p_erstelldatum,:genehm_E1,:genehm_E2,:genehm_E3,:p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:komm_konz,:risiko,:beschreibung,:tat_sta_datum,:tat_end_datum,:vor_sta_datum,:vor_end_datum,:nutzen,:amorti_zeit,:bemerkung,:mon_kosten,:mon_nutzen,:kap_kosten,:e_id, :a_id, :l_id, :b_id)", $projectAntragArray);

    if (isset($_POST["reg"]["kapitalwert"])) {
        foreach ($_POST["reg"]["kapitalwert"] as $value) {
            $kid = core()->db()->update("insert into kapitalwerte (p_id,jahr,zinssatz,einzahlung,auszahlung)"
                    . "values (" . $pid . "," . $value[0] . ",0," . $value[1] . "," . $value[2] . ")", null);
        }
    }

    if (isset($_POST["reg"]["meilensteine"])) {
        foreach ($_POST["reg"]["meilensteine"] as $value) {
            $mid = core()->db()->update("insert into meilensteine (p_id,ms_nummer,meilenstein,erfüllt)"
                    . "values(" . $pid . "," . $value[0] . "," . $value[1] . ",0)", null);
        }
    }

    header('Location: /pm/antrag/dashboard');
    exit;
} else {
    //$test = core()->db()->select("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'pams' AND TABLE_NAME = 'projekt'", "fetch");
    //var_dump($test);
}

core()->materialize()->addFixedNavElement("/pm/antrag/uebersicht", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
