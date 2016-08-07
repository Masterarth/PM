<?php

$request = core()->request()->getParams();

var_dump($_POST["reg"]);

$data = array("betrag" => null, "startdatum" => null, "enddatum" => null, "aktiv" => null);

if (is_numeric($_POST["reg"]["betrag"])) {
    $data["betrag"] = $_POST["reg"]["betrag"];
} else {
    core()->materialize()->toast("Bitte geben sie einen Betrag an");
}
if ($_POST["reg"]["startdatum"] != 0 && $_POST["reg"]["enddatum"] != 0) {
    if ($_POST["reg"]["startdatum"] < $_POST["reg"]["enddatum"]) {
        $data["startdatum"] = $_POST["reg"]["startdatum"];
        $data["enddatum"] = $_POST["reg"]["enddatum"];
    } else {
        core()->materialize()->toast("Enddatum muss älter sein");
    }
}
if (isset($_POST["reg"]["aktiv"])) {
    $data["aktiv"] = $_POST["reg"]["aktiv"];
}

if (isset($data["betrag"])) {
    $b_id = core()->db()->update("insert into budget (betrag, sta_periode, end_periode, aktiv) values (:betrag,:startdatum,:enddatum,:aktiv)", $data);
    $firma["b_id"] = $b_id;
    core()->db()->update("update firma set budget_id=:b_id", $firma);
}