<?php

$permissions = include 'config/permission.php';

core()->smarty()->assign("permissions", $permissions);

$roles = core()->db()->select("select * from rolle");

$rolle = new stdClass();
$rolle->rolle = "All";

$roles[] = $rolle;

core()->smarty()->assign("rollen", $roles);
