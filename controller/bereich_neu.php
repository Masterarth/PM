<?php

$standorte = core()->db()->select("select * from standort");

core()->materialize()->addFixedNavElement("/pm/bereich/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
core()->smarty()->assign("standorte", $standorte);
core()->smarty()->assign("pageTitle", "Neuen Bereich anlegen");
