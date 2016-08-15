<?php

if (isset($_POST["reg"])) {

    $result = core()->db()->select("select l_name from users where l_name ='" . $_POST["reg"]["account_name"] . "'");
    if (count($result) <= 0) {

        //TODO:
        //erst mal hier für testzwecke
        //muss noch an eine andere stelle verschoben werden
        //aller erster user der erstellt wird ist aktiv und admin
        $rollen = core()->db()->select("select * from rolle");
        if (count($rollen) <= 0) {
            $rollen[]["rolle"] = "Admin";
            $rollen[]["rolle"] = "Mitarbeiter";
            $rollen[]["rolle"] = "Projektleiter";
            foreach ($rollen as $rolle) {
                core()->db()->update("insert into rolle (rolle) values (:rolle)", $rolle);
            }
        }
        //---ende---

        $users = core()->db()->select("select * from users u, mitarbeiter m where m.u_id = u.id");
        
        //gehört noch zu dem oberen teil
        //achtung in insert statement noch beachten
        if (count($users) <= 0) {
            $mitarbeiter["r_id"] = 1;
            $user["aktiv"] = 1;
        } else {
            $mitarbeiter["r_id"] = 2;
            $user["aktiv"] = 0;
        }
        //---ende---

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

    