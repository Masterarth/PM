<?php
/**
 * Drops the existing Tables from the Database and loads the new 
 * defined SQL Statements
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */

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
        core()->materialize()->toast("Datenbank wurde refresht");
    } else {
        core()->materialize()->toast("FAIL");
    }
}