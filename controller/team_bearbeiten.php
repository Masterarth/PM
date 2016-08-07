<?php

if (isset($_POST["reg"])) {

    $mitarbeiter = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["reg"]["leiter"] . "%'", "fetch");

    if (isset($mitarbeiter)) {

        $result = core()->db()->select("select * from team where id ='" . $_POST["reg"]["id"] . "'", "fetch");
        if ($result) {

            $team["t_name"] = $_POST["reg"]["t_name"];
            $team["a_id"] = $_POST["reg"]["a_id"];
            $team["leiter"] = $mitarbeiter->id;

            $id = core()->db()->update("update team set t_name=:t_name, a_id=:a_id, t_leitung=:leiter where id=" . $_POST["reg"]["id"], $team);
            header('Location: /pm/team/' . $_POST["reg"]["id"]);
            exit;
        }
    }
}

