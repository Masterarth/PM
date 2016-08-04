<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from team where id ='" . $_POST["reg"]["id"] . "'", "fetch");
    if ($result) {

        $team["t_name"] = $_POST["reg"]["t_name"];

        $id = core()->db()->update("update standort set t_name=:name where id=" . $_POST["reg"]["id"], $standort);
        header('Location: /pm/team/' . $_POST["reg"]["id"]);
        exit;
    }
}

