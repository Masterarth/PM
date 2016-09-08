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

$teams = core()->db()->select("select * from team");
core()->smarty()->assign("teams",$teams);

$mitarbeiter = core()->db()->select("select * from mitarbeiter where r_id = 3");
core()->smarty()->assign("mitarbeiter", $mitarbeiter);

if (isset($_POST["reg"])) {

    //Standard Informationen
    $projekt = new pm_projekt();
    $projekt->setTitle($_POST["reg"]["projectname"]);
    $projekt->setExpectedStartTime($_POST["reg"]["sollstartdatum"]);
    $projekt->setExpectedEndTime($_POST["reg"]["sollenddatum"]);
    $projekt->setDescription($_POST["reg"]["kurzbeschreibung"]);
    $projekt->setGeneralConditions($_POST["reg"]["rahmenbedingungen"]);
    $projekt->setCommunicationConcept($_POST["reg"]["kommunikation"]);
    $projekt->setNoTargets($_POST["reg"]["nichtZiele"]);
    $projekt->setCreationDate(date("Y-m-d"));

    $projekt->setCreator($_POST["reg"]["auftraggeber"]);
    $projekt->setAmortizationRate($_POST["reg"]["amortisation"]);
    $projekt->setRemark($_POST["reg"]["bemerkung"]);

    $projekt->setE_id($_SESSION["user"]->getId());
    (isset($_POST["reg"]["abteilung"])) ? $projekt->setA_id($_POST["reg"]["abteilung"]) : null;
    (isset($_POST["reg"]["leiter"])) ? $projekt->setL_id($_POST["reg"]["leiter"]) : null;
    $projekt->setS_id(1);
    $projekt->setB_id($_SESSION["user"]->getId());

    //Zielkreuzmethode
    $projekt->setTargetCross1($_POST["reg"]["kreuzwozu"]);
    $projekt->setTargetCross2($_POST["reg"]["kreuzwas"]);
    $projekt->setTargetCross3($_POST["reg"]["kreuzwiegut"]);
    $projekt->setTargetCross4($_POST["reg"]["kreuzfuerwen"]);

    //Kosten/Nutzen
    $projekt->setMoneyCosts($_POST["reg"]["sollkosten"]);
    $projekt->setMonesEarnings($_POST["reg"]["sollnutzen"]);
    (isset($_POST["reg"]["kapitalwert"]["kosten"])) ? $projekt->setCapitalCosts($_POST["reg"]["kapitalwert"]["kosten"]) : null;

    if (isset($_POST["reg"]["kapitalwert"])) {
        foreach ($_POST["reg"]["kapitalwert"]["data"] as $value) {
            $capitalValue = new pm_capitalvalue();
            $capitalValue->setInputMoneyVal($value["ein"]);
            $capitalValue->setOutputMoneyVal($value["aus"]);
            (isset($_POST["reg"]["kapitalwert"]["zins"])) ? $capitalValue->setRent($_POST["reg"]["kapitalwert"]["zins"]) : null;
            $capitalValue->setYear($value["jahr"]);
            $projekt->setCapitalflow($capitalValue);
        }
    }

    if (isset($_POST["reg"]["meilensteine"])) {
        foreach ($_POST["reg"]["meilensteine"] as $value) {
            $milestone = new pm_milestone();
            (isset($value["checked"])) ? $milestone->setFinished(1) : $milestone->setFinished(0);
            $milestone->setMilestoneName($value["beschreibung"]);
            $milestone->setMilestoneNr($value["nr"]);
            $projekt->setMilestone($milestone);
        }
    }

    if (isset($_POST["reg"]["leistung"])) {
        foreach ($_POST["reg"]["leistung"] as $value) {
            $team = new pm_projektteam();
            $team->setHours($value["wert"]);
            $team->setProjectId($projekt->getDatabaseId());
            $team->setProjectName($projekt->getTitle());
            $team->setTeamId($value["abteilung"]);
            $projekt->setInvolvedTeams($team);
        }
    }

    $projekt->createProject();

    header('Location: /pm/antrag/' . $projekt->getDatabaseId());
    exit;
}
