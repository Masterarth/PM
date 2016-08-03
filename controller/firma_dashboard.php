<?php

if (isset($_POST["firma_search"])) {
    if (is_numeric($_POST["firma_search"])) {
        header('Location: /pm/firma/' . $_POST["firma_search"]);
        exit;
    } else {
        $firmen = core()->db()->select("select * from firma where f_name like '%" . $_POST["firma_search"] . "%'");
    }
} else {
    $firmen = core()->db()->select("select * from firma");
}

core()->materialize()->addFixedNavElement("/pm/firma/neu", "Firma anlegen", "mode_edit");
core()->materialize()->showFixedNavElement();
core()->smarty()->assign("firmen", $firmen);
core()->materialize()->pageTitle("Firmen");
