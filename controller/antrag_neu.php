<?php


if (isset($_POST["reg"])) {
    
    var_dump($_POST["reg"]);
    
    //Standard Informationen
    $project_name = $_POST["reg"]["projectname"];
    $soll_start_datum = $_POST["reg"]["sollstartdatum"];
    $soll_end_datum = $_POST["reg"]["sollenddatum"];
    $project_kurzbeschreibung = $_POST["reg"]["kurzbeschreibung"];
    $project_rahmenbedingungen = $_POST["reg"]["rahmenbedingungen"];
    $project_kommunikation = $_POST["reg"]["kommunikation"];
    
    //Zusatz Informationen
//    $zielkreuz_wozu
//    $zielkreuz_was
//            $zielkreuz_wiegut
//            $zielkreuz_wen
    
    
    header('Location: /pm/abteilung/dashboard');
    exit;
    
}
