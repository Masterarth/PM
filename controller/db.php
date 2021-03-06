<?php

/**
 * Drops the existing Tables from the Database and loads the new 
 * defined SQL Statements
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
if (isset($_SESSION["user"]) && !isset($_POST["reg"]["refresh"])) {
    session_destroy();
    header('Location: /pm/db');
    exit;
}

if (isset($_POST["reg"]["refresh"]) && $_POST["reg"]["refresh"] == true) {
    $result = core()->db()->select("SHOW TABLES");
    while (count($result) > 0) {
        $result = core()->db()->select("SHOW TABLES");
        if (count($result) > 0) {
            foreach ($result as $value) {
                core()->db()->update("DROP TABLE IF EXISTS " . $value->Tables_in_pams);
            }
        }
    }
    $result = core()->db()->select("SHOW TABLES");
    if (count($result) <= 0) {
        core()->db()->update(file_get_contents("documents/database/createStatements.sql"));

        $rollen = core()->db()->select("select * from rolle");
        if (count($rollen) <= 0) {
            $rollen[]["rolle"] = "Admin";
            $rollen[]["rolle"] = "Mitarbeiter";
            $rollen[]["rolle"] = "Projektleiter";
            foreach ($rollen as $rolle) {
                core()->db()->update("insert into rolle (rolle) values (:rolle)", $rolle);
            }
        }

        core()->db()->update(file_get_contents("documents/database/testingStatements.sql"));

        core()->materialize()->toast("Datenbank wurde refresht");
    } else {
        core()->materialize()->toast("FAIL");
    }
}