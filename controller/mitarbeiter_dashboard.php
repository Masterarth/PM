<?php

if (isset($_POST["ma_search"])) {
    if (is_numeric($_POST["ma_search"])) {
        header('Location: /pm/mitarbeiter/' . $_POST["ma_search"]);
        exit;
    } else {
        $users = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["ma_search"] . "%'");
    }
} else {
    $users = core()->userhandler()->getAllUser();
}

core()->materialize()->addFixedNavElement("/pm/mitarbeiter/neu", "Mitarbeiter anlegen", "mode_edit");
core()->materialize()->showFixedNavElement();
core()->smarty()->assign("users", $users);
