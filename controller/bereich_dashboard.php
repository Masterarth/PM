<?php

if (isset($_POST["bereich_search"])) {
    if (is_numeric($_POST["bereich_search"])) {
        header('Location: /pm/bereich/' . $_POST["bereich_search"]);
        exit;
    } else {
        $bereiche = core()->db()->select("select * from bereich where concat_ws(' ',b_name,b_leitung) like '%" . $_POST["bereich_search"] . "%'");
    }
} else {
    $bereiche = core()->db()->select("select * from bereich");
}

core()->materialize()->addFixedNavElement("/pm/bereich/neu", "Bereich anlegen", "mode_edit");
core()->materialize()->showFixedNavElement();
core()->smarty()->assign("bereiche", $bereiche);
