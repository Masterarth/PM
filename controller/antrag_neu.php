<?php

if (isset($_POST["reg"])) {

    $projectAntragArray = array(
        'p_nummer'=>null,
        'titel' => null,
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
        'komm_konz' => null
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

    $uid = core()->db()->update("insert into team (t_name, a_id, t_leitung) values (:t_name,:a_id,:leiter)", $team);


    header('Location: /pm/antrag/dashboard');
    exit;

    //header('Location: /pm/abteilung/dashboard');
    //exit;
}
