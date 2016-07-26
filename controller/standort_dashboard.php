<?php

if (isset($_POST["standort_search"])) {
    if (is_numeric($_POST["standort_search"])) {
        header('Location: /pm/standort/' . $_POST["standort_search"]);
        exit;
    } else {
        $standorte = core()->db()->select("select * from standort where concat_ws(' ',s_name,plz,ort,strasse,hausnummer) like '%" . $_POST["standort_search"] . "%'");
    }
} else {
    $standorte = core()->db()->select("select * from standort");
}

core()->smarty()->assign("standorte", $standorte);
