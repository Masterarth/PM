<?php

/**
 * Reads the Permissions from the Config File
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */
$permissions = include 'config/permission.php';

core()->smarty()->assign("permissions", $permissions);
core()->materialize()->addFixedNavElement("/pm/stammdaten/", "Zurück", "call_missed", "black");
core()->materialize()->showFixedNavElement();
$roles = core()->db()->select("select * from rolle");

$rolle = new stdClass();
$rolle->rolle = "All";

$roles[] = $rolle;

core()->smarty()->assign("rollen", $roles);


