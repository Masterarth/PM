<?php

/**
 * Registers an User if the User doesn't exists
 * Inserts the new User into the Database if the Username doesn't exists
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
if (isset($_POST["reg"])) {

    $result = core()->db()->select("select l_name from users where l_name ='" . $_POST["reg"]["account_name"] . "'");
    if (count($result) <= 0) {

        $users = core()->db()->select("select * from users u, mitarbeiter m where m.u_id = u.id");

        if (count($users) <= 0) {
            $mitarbeiter["r_id"] = 1;
            $user["aktiv"] = 1;
        } else {
            $mitarbeiter["r_id"] = 2;
            $user["aktiv"] = 0;
        }

        $user["hash"] = password_hash($_POST["reg"]["password"], PASSWORD_DEFAULT);
        $user["name"] = $_POST["reg"]["account_name"];
        $user["timestamp"] = date("c");

        $uid = core()->db()->update("insert into users (l_name, passwort,reg_datum,aktiv) values (:name,:hash,:timestamp,:aktiv)", $user);

        $mitarbeiter["vorname"] = $_POST["reg"]["vorname"];
        $mitarbeiter["nachname"] = $_POST["reg"]["nachname"];
        $mitarbeiter["uid"] = $uid;

        core()->db()->update("insert into mitarbeiter (u_id, nachname, vorname,r_id) values (:uid, :nachname, :vorname,:r_id)", $mitarbeiter);

        header('Location: /pm/anmelden');
        exit;
    } else {
        core()->materialize()->toast("Accountname ist schon vergeben");
    }
}

    