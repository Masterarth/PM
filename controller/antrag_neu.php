<?php

if (isset($_POST["reg"])) {

    $projectAntragArray = array(
        'p_auftraggeber'=>null,
        'p_nummer'=>null,
        'p_titel' => null,
        'bemerkung' => null,
        'p_nummer' => null,
        'auftraggeber' => null,
        'p_ziel1' => null,
        'p_ziel2' => null,
        'p_ziel3' => null,
        'p_ziel4' => null,
        'nicht_ziel' => null,
        'amorti_zeit' => null,
        'genehm_E1' => null,
        'genehm_E2' => null,
        'genehm_E3' => null,
        'rahmbeding' => null,
        'beschreibung' => null,
        'nutzen' => null,
        'erstell_datum' => null,
        'tat_sta_datum' => null,
        'tat_end_datum' => null,
        'vor_sta_datum' => null,
        'vor_end_datum' => null,
        'aufwand' => null,
        'risiko' => null,
        'komm_konz' => null,
        'p_erstellDatum' =>null,
        'p_system'=>null
    );


    $projectMeilensteinArray = array(    
        'ms_nummer'=>null,
        'meilenstein'=>null,
        'erfuellt'=>null
    );

    
    $projectStatusArray = array(
      'status'=>null
    );

    //Standard Informationen
    $project_name = $_POST["reg"]["projectname"];
    $soll_start_datum = $_POST["reg"]["sollstartdatum"];
    $soll_end_datum = $_POST["reg"]["sollenddatum"];
    $project_kurzbeschreibung = $_POST["reg"]["kurzbeschreibung"];
    $project_rahmenbedingungen = $_POST["reg"]["rahmenbedingungen"];
    $project_kommunikation = $_POST["reg"]["kommunikation"];

    //Zielkreuzmethode
    $zielkreuz_wozu = $_POST["reg"]["kreuzwozu"];
    $zielkreuz_was = $_POST["reg"]["kreuzwas"];
    $zielkreuz_wiegut = $_POST["reg"]["kreuzwiegut"];
    $zielkreuz_wen = $_POST["reg"]["kreuzfuerwen"];

    //Kosten/Nutzen
    $soll_kosten = $_POST["reg"]["sollkosten"];
    $soll_nutzen = $_POST["reg"]["sollnutzen"];

    //Kapitalwert
    $kostenKapitalwert = $_POST["reg"]["kostenKapitalwert"];
    $tableKapitalwert = $_POST["reg"]["kapitalwertfelder"];

    //Leistungsverrechnung
    $tableLeistungsverrechnung = $_POST["reg"]["leistungsverrechnung"];

    //Meilensteine
    $tableMeilensteine = $_POST["reg"]["meilensteine"];

    $uid = core()->db()->update(
            "insert into projekt ("
            . "titel, p_nummer, auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2, genehmigung_E3, "
            . "p_ziel1, p_ziel2, p_ziel3, p_ziel4, nicht_ziel,rahmbeding, p_system, aufwand, komm_konz,risiko,e_id,a_id,l_id,b_id,tat_budget_id,plan_budget_id,"
            . "vor_sta_term, vor_end_term,tat_sta_term,tat_end_term,beschreibung,nutzen,amorti_zeit,bemerkung) "
            . "values (:p_titel,:p_nummer,:p_auftraggeber, :p_ertellDatum, :genehm_E1, :genehm_E2, :genehm_E3"
            . ":p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:aufwand,:komm_konz,:risiko,null,null,null,null,null,null"
            . ":vor_sta_datum,:vor_end_datum,:tat_sta_datum,:tat_end_datum,:beschreibung,:nutzen,:amorti_zeit,:bemerkung)", $projectAntragArray);


    header('Location: /pm/antrag/dashboard');
    exit;

    //header('Location: /pm/abteilung/dashboard');
    //exit;
}
