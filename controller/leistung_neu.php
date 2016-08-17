<?php

/**
 * hier fehlt noch der text ... ^^ 
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
$request = core()->request()->getParams();

$data = array("t_id" => null, "jahr" => null, "ist_stunden" => null, "max_stunden" => null);

if (isset($_POST["reg"])) {

    $data["t_id"] = $_POST["reg"]["t_id"];
    $data["jahr"] = $_POST["reg"]["year"];
    $data["ist_stunden"] = $_POST["reg"]["min_hour"];
    $data["max_stunden"] = $_POST["reg"]["max_hour"];

    $b_id = core()->db()->update("insert into leistung (t_id, jahr, ist_stunden, max_stunden) values (:t_id,:jahr,:ist_stunden,:max_stunden)", $data);

    header('Location: /pm/team/' . $_POST["reg"]["t_id"]);
    exit;
}
