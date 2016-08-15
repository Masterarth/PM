<?php
/**
 * There is no Dashboard becouse its only 1 Company Allowed
 * 1. If no Company exists --> Create a new one
 * 2. If a Company exists --> Shows it up
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */

// --- es soll kein dashboard für firmen angezeigt werden, da es nur eine firma
//     gibt. deshalb die direkte umleitung auf die firma die angelegt wurde.
//     falls keine firma vorhanden soll eine angelegt werden.

$firmen = core()->db()->select("select * from firma");

if (count($firmen) == 1) {
    header('Location: /pm/firma/' . $firmen[0]->id);
    exit;
} else {
    header('Location: /pm/firma/neu');
    exit;
}

// -----------------------------------------------------------------------------

// Ab hier nur auskommentiert falls doch ein Firmendashboard gebraucht wird.

//if (isset($_POST["firma_search"])) {
//    if (is_numeric($_POST["firma_search"])) {
//        header('Location: /pm/firma/' . $_POST["firma_search"]);
//        exit;
//    } else {
//        $firmen = core()->db()->select("select * from firma where f_name like '%" . $_POST["firma_search"] . "%'");
//    }
//} else {
//    $firmen = core()->db()->select("select * from firma");
//}
//
//core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed");
//core()->materialize()->addFixedNavElement("/pm/firma/neu", "Firma anlegen", "mode_edit");
//core()->materialize()->showFixedNavElement();
//core()->smarty()->assign("firmen", $firmen);

