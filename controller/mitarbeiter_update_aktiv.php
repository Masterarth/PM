<?php

if (!isset($_POST["aktiv"])) {
    $aktiv = 0;
} else {
    $aktiv = 1;
}

$data["aktiv"] = $aktiv;

core()->db()->update("update users set aktiv =:aktiv where id=" . $_POST["id"], $data);

header("Location: /pm/mitarbeiter/" . $_POST["id"]);
exit();
