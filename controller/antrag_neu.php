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

    //Meilensteine
    //$tableMeilensteine = $_POST["reg"]["meilensteine"];

    $pid = core()->db()->update(
            "insert into projekt (titel,auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2,genehmigung_E3,p_ziel1,p_ziel2,p_ziel3,p_ziel4,nicht_ziel,rahmbeding,p_system,aufwand,komm_konz,risiko,beschreibung,tat_sta_term,tat_end_term,vor_sta_term,vor_end_term,nutzen,amorti_zeit,bemerkung) "
            . "values(:p_titel,:p_auftraggeber,:p_erstelldatum,:genehm_E1,:genehm_E2,:genehm_E3,:p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:aufwand,:komm_konz,:risiko,:beschreibung,:tat_sta_datum,:tat_end_datum,:vor_sta_datum,:vor_end_datum,:nutzen,:amorti_zeit,:bemerkung)", $projectAntragArray);
    var_dump($pid);

    //Kapitalwert
    //$kostenKapitalwert = $_POST["reg"]["kostenKapitalwert"];
    //$tableKapitalwert = $_POST["reg"]["kapitalwertfelder"];
    //Kapitalwert Loop
    $looper = true;
    $counter = 0;

    while ($looper) {
        try {
            $string1 = "kwEin" . $counter;
            $string2 = "kwAusg" . $counter;
            $string3 = "kwJahr" . $counter;

            var_dump($string1);
            echo $string2;
            echo $string3;
            $einnahme = $_POST["reg"][$string1];
            $ausgabe = $_POST["reg"][$string2];
            $jahr = $_POST["reg"][$string3];
            echo $counter;
            $counter++;
        } catch (Exception $ex) {
            $looper = false;
            break;
        }
    }

    //Meilensteine Loop
    $looper = true;
    $counter = 0;
//    while ($looper) {
//        try {
//            $nr = $_POST["reg"]["msNr" + $counter];
//            $meilenstein = $_POST["reg"]["msBezeichner" + $counter];
//            echo $counter;
//            $counter++;
//        } catch (Exception $ex) {
//            $looper = false;
//            $break;
//        }
//    }
    //Loop über die Meilensteine
//     $mid = core()->db()->update("insert into meilensteine (p_id,ms_nummer,meilenstein,erfüllt) "
//             . "values(:p_id,:msnr,:meilenstein,:erledigt)",$meilensteinarray);
    //Loop über Arbeitspakete
//        $apid = core()->db()->update("insert into arbeitspakete (arbeitspaket,p_id) values(:p_arbeitspaket,:p_id");
    //header('Location: /pm/antrag/uebersicht');
    //exit;
}
