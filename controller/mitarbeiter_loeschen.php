<?php

$request = core()->request()->getParams();

if (is_numeric($request[3])) {
    $result = core()->db()->select("select * from mitarbeiter where id ='" . $request[3] . "'", "fetch");
    if ($result) {
        core()->db()->delete("delete from mitarbeiter where id=" . $request[3]);
        core()->db()->delete("delete from users where id=" . $result->u_id);
        header('Location: /pm/mitarbeiter/dashboard');
        exit;
    }
}

