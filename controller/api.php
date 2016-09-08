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
        case "stats_rollen":
            $users = core()->stats()->getRolesAndNumbersOfEmployees();
            foreach ($users as $user) {
                $data[] = array("rolle" => $user->rolle, "anzahl" => $user->anzahl);
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
        case "stats_projekte":
            $projekte = core()->stats()->getNumberAndStatusOfProjects();
            foreach ($projekte as $projekt) {
                $data[] = array("status" => $projekt->status, "anzahl" => $projekt->anzahl);
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
        case "gantt_projekte":
            if (isset($_SESSION["user"]) && (!isset($request[3]))) {
                $user = $_SESSION["user"];
                //$projekte = core()->db()->select("select p.* from projekt p, abteilung a where  p.a_id = a.id and (a.a_leitung = " . $user->getId() . " or p.e_id = " . $user->getId() . " or p.l_id =" . $user->getId() . ") and p.s_id between 2 and 4");
                $projekte = core()->db()->select("SELECT p.* from projekt p, abteilung a, standort s where ((p.e_id =" . $user->getId() . ") or (p.a_id = a.id and a.a_leitung = " . $user->getId() . ") or (p.a_id = a.id and a.s_id = s.id and s.s_leitung = " . $user->getId() . ") or (p.l_id = " . $user->getId() . ")) and p.s_id BETWEEN 2 and 4 GROUP BY p.id");
            } elseif ((isset($request[3]) && $request[3] == "all") || !isset($_SESSION["user"])) {
                $projekte = core()->db()->select("select * from projekt where s_id between 2 and 4");
            }
            $data = array();
            foreach ($projekte as $projekt) {
                $data[] = array(
                    "taskId" => "Projekt " . $projekt->id,
                    "taskName" => $projekt->titel,
                    "startDate" => date("Y,m,d", strtotime($projekt->vor_sta_term)),
                    "endDate" => date("Y,m,d", strtotime($projekt->vor_end_term)),
                    "duration" => null,
                    "complete" => calcComplete($projekt->id),
                    "resource" => generateRandomString());
            }
            echo json_encode($data, JSON_NUMERIC_CHECK);
            exit;
            break;
    }
}

function calcComplete($pid) {
    $milestones = core()->db()->select("select * from meilensteine where p_id=" . $pid);
    $milestones_checked = core()->db()->select("select * from meilensteine where p_id=" . $pid . " and erfuellt = 1");
    if (count($milestones) > 0) {
        return ((100 / count($milestones)) * count($milestones_checked));
    }
    return 100;
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
