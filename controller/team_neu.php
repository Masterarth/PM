<?php

core()->materialize()->pageTitle("Team");

$standorte = core()->db()->select("select * from standort");
core()->smarty()->assign("standorte", $standorte);

$abteilungen = core()->db()->select("select * from abteilung,standort where abteilung.s_id=standort.id");
core()->smarty()->assign("abteilungen", $abteilungen);

core()->materialize()->addFixedNavElement("/pm/team/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from team where t_name ='" . $_POST["reg"]["t_name"] . "'","fetch");
    var_dump($_POST);
    if (count($result) <= 0) {
        $mitarbeiter = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["reg"]["leiter"] . "%'", "fetch");
        if (isset($mitarbeiter)) {
            $team["t_name"] = $_POST["reg"]["t_name"];
            $team["a_id"] = $_POST["reg"]["a_id"];
            $team["leiter"] = $mitarbeiter->id;

            var_dump($team);

            $uid = core()->db()->update("insert into team (t_name, a_id, t_leitung) values (:t_name,:a_id,:leiter)", $team);
            var_dump($uid);
            // header('Location: /pm/team/dashboard');
            //exit;
        }
    } else {
        core()->materialize()->toast("Team ist schon vorhanden");
    }
}
    