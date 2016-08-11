<?php

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
        'aufwand' => null,
        'risiko' => null,
        'komm_konz' => null,
        'p_system' => null,
        'p_erstelldatum' => null
    );


    $projectMeilensteinArray = array(
        'ms_nummer' => null,
        'meilenstein' => null,
        'erfuellt' => null
    );


    $projectStatusArray = array(
        'status' => null
    );

    //Standard Informationen
    $projectAntragArray["p_titel"] = $_POST["reg"]["projectname"];
    $projectAntragArray["vor_sta_datum"] = $_POST["reg"]["sollstartdatum"];
    $projectAntragArray["vor_end_datum"] = $_POST["reg"]["sollenddatum"];
    $projectAntragArray["beschreibung"] = $_POST["reg"]["kurzbeschreibung"];
    $projectAntragArray["rahmbeding"] = $_POST["reg"]["rahmenbedingungen"];
    $projectAntragArray["komm_konz"] = $_POST["reg"]["kommunikation"];
    $projectAntragArray["p_erstelldatum"] = date("d.m.Y");

    //Zielkreuzmethode
    $projectAntragArray["p_ziel1"] = $_POST["reg"]["kreuzwozu"];
    $projectAntragArray["p_ziel2"] = $_POST["reg"]["kreuzwas"];
    $projectAntragArray["p_ziel3"] = $_POST["reg"]["kreuzwiegut"];
    $projectAntragArray["p_ziel4"] = $_POST["reg"]["kreuzfuerwen"];

    //Kosten/Nutzen
    $soll_kosten = $_POST["reg"]["sollkosten"];
    $soll_nutzen = $_POST["reg"]["sollnutzen"];

    var_dump($projectAntragArray);


    $pid = core()->db()->update(
            "insert into projekt (titel,auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2,genehmigung_E3,p_ziel1,p_ziel2,p_ziel3,p_ziel4,nicht_ziel,rahmbeding,p_system,aufwand,komm_konz,risiko,beschreibung,tat_sta_term,tat_end_term,vor_sta_term,vor_end_term,nutzen,amorti_zeit,bemerkung) "
            . "values(:p_titel,:p_auftraggeber,:p_erstelldatum,:genehm_E1,:genehm_E2,:genehm_E3,:p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:aufwand,:komm_konz,:risiko,:beschreibung,:tat_sta_datum,:tat_end_datum,:vor_sta_datum,:vor_end_datum,:nutzen,:amorti_zeit,:bemerkung)", $projectAntragArray);
    
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


    //header('Location: /pm/antrag/uebersicht');
    //exit;
}
