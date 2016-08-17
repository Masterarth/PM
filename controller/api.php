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
        case "stats_mitarbeiter":
            $users = core()->db()->select("select count(r.rolle) as anzahl, r.rolle from mitarbeiter m left join rolle r on m.r_id = r.id group by r.rolle");
            foreach ($users as $user) {
                $data[] = array("rolle" => $user->rolle, "anzahl" => $user->anzahl);
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
        case "stats_projekte":
            $users = core()->db()->select("select count(r.rolle) as anzahl, r.rolle from mitarbeiter m left join rolle r on m.r_id = r.id group by r.rolle");
            foreach ($users as $user) {
                $data[] = array("rolle" => $user->rolle, "anzahl" => $user->anzahl);
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
        case "stats_ressourcen":
            $users = core()->db()->select("select m.*,count(p.id) as projekte from mitarbeiter m left join projekt p on p.l_id = m.id where m.r_id = 3 group by m.id");
            foreach ($users as $user) {
                $data[] = array("name" => $user->vorname . " " . $user->nachname, "anzahl" => $user->projekte);
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
        case "gantt_projekte":
            $projekte = core()->db()->select("select * from projekt");
            foreach ($projekte as $projekt) {
                $data[] = array(
                    "taskId" => "Projekt " . $projekt->id,
                    "taskName" => $projekt->titel,
                    "startDate" => date("Y,m,d", strtotime($projekt->vor_sta_term)),
                    "endDate" => date("Y,m,d", strtotime($projekt->vor_end_term)),
                    "duration" => null,
                    "complete" => rand(0, 100),
                    "resource" => generateRandomString());
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
