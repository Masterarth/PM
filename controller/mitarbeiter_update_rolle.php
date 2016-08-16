<?php

if (isset($_POST["rolle"])) {
    $data["rolle"] = $_POST["rolle"];
    $test = core()->db()->update("update mitarbeiter set r_id=:rolle where id=" . $_POST["id"], $data);
    header("Location: /pm/mitarbeiter/" . $_POST["id"]);
    exit();
}
