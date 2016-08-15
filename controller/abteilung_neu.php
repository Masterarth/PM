<?php
/**
 * Creates a new Department and saves it into the Database
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */


$standorte = core()->db()->select("select * from standort");
core()->smarty()->assign("standorte", $standorte);

core()->materialize()->addFixedNavElement("/pm/abteilung/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();

if (isset($_POST["reg"])) {

    $mitarbeiter = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["reg"]["leiter"] . "%'", "fetch");
    if (isset($mitarbeiter)) {
        $abteilung["name"] = $_POST["reg"]["name"];
        $abteilung["standort"] = $_POST["reg"]["s_id"];
        $abteilung["leiter"] = $mitarbeiter->id;

        core()->db()->update("insert into abteilung (a_name,s_id,a_leitung) values (:name,:standort,:leiter)", $abteilung);

        header('Location: /pm/abteilung/dashboard');
        exit;
    }
}