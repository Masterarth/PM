<?php

$request = core()->request()->getParams();
core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);


if (isset($request[2])) {
    switch ($request[2]) {
        case "mitarbeiter":
            if (isset($_POST["name"])) {
                $users = core()->db()->select("select * from mitarbeiter where concat_ws(' ',vorname,nachname) like '%" . $_POST["name"] . "%'", 'fetchAll', PDO::FETCH_ASSOC);

                echo json_encode($users);
                exit;
            }
            break;
    }
}