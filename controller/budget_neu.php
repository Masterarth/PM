<?php

$request = core()->request()->getParams();

$data = array("betrag" => null, "startdatum" => null, "enddatum" => null, "aktiv" => null);

if (isset($_POST["reg"])) {
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
    if (isset($_POST["reg"]["aktiv"]) && $_POST["reg"]["aktiv"] == "on") {
        $data["aktiv"] = true;
    } else {
        $data["aktiv"] = false;
    }

    $data["f_id"] = $_POST["reg"]["f_id"];

    if (isset($data["betrag"])) {
        $b_id = core()->db()->update("insert into firbudget (betrag, sta_periode, end_periode, aktiv, f_id) values (:betrag,:startdatum,:enddatum,:aktiv,:f_id)", $data);

        header('Location: /pm/firma/' . $_POST["reg"]["f_id"]);
        exit;
    }
}
