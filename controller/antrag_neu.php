<?php


if (isset($_POST["reg"])) {
    
    var_dump($_POST["reg"]["kapitalwertfelder"]);
    var_dump($_POST["reg"]);
    
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
    
    
    
    //Zusatzinformationen
    
    
    //header('Location: /pm/abteilung/dashboard');
    //exit;
    
}
