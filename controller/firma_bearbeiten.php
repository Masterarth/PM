<?php
/**
 * Edits the current Company and Updates the Company
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */


if (isset($_POST["reg"])) {

    $result = core()->db()->select("select * from firma where id ='" . $_POST["reg"]["f_id"] . "'", "fetch");
    if ($result) {

        $firma["name"] = $_POST["reg"]["name"];

        $fid = core()->db()->update("update firma set f_name=:name where id=" . $_POST["reg"]["f_id"], $firma);

        header('Location: /pm/firma/' . $_POST["reg"]["f_id"]);
        exit;
    }
}

