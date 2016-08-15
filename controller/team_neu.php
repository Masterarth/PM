<?php
/**
 * Creates a new Team
 * 1. If there is no Team with this name => Create a new one
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */

$abteilungen = core()->db()->select("select * from abteilung,standort where abteilung.s_id=standort.id");
core()->smarty()->assign("abteilungen", $abteilungen);

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from team where t_name ='" . $_POST["reg"]["t_name"] . "'");
    if (count($result) <= 0) {
        $mitarbeiter = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["reg"]["leiter"] . "%'", "fetch");
        if (isset($mitarbeiter)) {
            $team["t_name"] = $_POST["reg"]["t_name"];
            $team["a_id"] = $_POST["reg"]["a_id"];
            $team["leiter"] = $mitarbeiter->id;

            $uid = core()->db()->update("insert into team (t_name, a_id, t_leitung) values (:t_name,:a_id,:leiter)", $team);
            header('Location: /pm/team/dashboard');
            exit;
        }
    } else {
        core()->materialize()->toast("Team ist schon vorhanden");
    }
}


core()->materialize()->addFixedNavElement("/pm/team/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
