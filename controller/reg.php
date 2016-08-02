<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select l_name from users where l_name ='" . $_POST["reg"]["account_name"] . "'");
    if (count($result) <= 0) {

        $user["hash"] = password_hash($_POST["reg"]["password"], PASSWORD_DEFAULT);
        $user["name"] = $_POST["reg"]["account_name"];
        $user["timestamp"] = date("c");

        $uid = core()->db()->update("insert into users (l_name, passwort,reg_datum) values (:name,:hash,:timestamp)", $user);

        $mitarbeiter["vorname"] = $_POST["reg"]["vorname"];
        $mitarbeiter["nachname"] = $_POST["reg"]["nachname"];
        $mitarbeiter["uid"] = $uid;

        core()->db()->update("insert into mitarbeiter (u_id, nachname, vorname) values (:uid, :nachname, :vorname)", $mitarbeiter);

        header('Location: /pm/anmelden');
        exit;
    } else {
        core()->materialize()->toast("Accountname ist schon vergeben");
    }
}

