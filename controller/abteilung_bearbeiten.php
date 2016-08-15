<?php
/**
 * Edits the selected "Department"
 * @author Artur Stalbaum
 * @since 15.08.2016
 */

if (isset($_POST["reg"])) {

    $mitarbeiter = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["reg"]["leiter"] . "%'", "fetch");

    if (isset($mitarbeiter)) {

        $abteilung["name"] = $_POST["reg"]["name"];
        $abteilung["standort"] = $_POST["reg"]["s_id"];
        $abteilung["leiter"] = $mitarbeiter->id;

        core()->db()->update("update abteilung set a_name=:name ,s_id=:standort,a_leitung=:leiter where id=" . $_POST["reg"]["id"], $abteilung);

        header('Location: /pm/abteilung/' . $_POST["reg"]["id"]);
        exit;
    }
}