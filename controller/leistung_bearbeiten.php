<?php

$request = core()->request()->getParams();

if (isset($_POST["reg"])) {

    $data = array("jahr" => null, "ist_stunden" => null, "max_stunden" => null);

    $data["jahr"] = $_POST["reg"]["year"];
    $data["ist_stunden"] = $_POST["reg"]["min_hour"];
    $data["max_stunden"] = $_POST["reg"]["max_hour"];

    $b_id = core()->db()->update("update leistung set jahr=:jahr, ist_stunden=:ist_stunden, max_stunden=:max_stunden where t_id=" . $_POST["reg"]["t_id"], $data);
    header('Location: /pm/team/' . $_POST["reg"]["t_id"]);
    exit;
} else {
    $leistung = core()->db()->select("select * from leistung where t_id = " . $request[3], "fetch");
    core()->smarty()->assign("leistung", $leistung);
}

