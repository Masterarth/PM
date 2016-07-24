<?php

if (isset($_POST["ma_search"])) {
    if (is_numeric($_POST["ma_search"])) {
        header('Location: /pm/mitarbeiter/' . $_POST["ma_search"]);
        exit;
    } else {
        $result = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["ma_search"] . "%'");
        if (count($result) > 1) {
            core()->smarty()->assign("users", $result);
        } else {
            header('Location: /pm/mitarbeiter/' . $result[0]->u_id);
            exit;
        }
    }
}