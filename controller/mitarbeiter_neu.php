<?php

core()->materialize()->addFixedNavElement("/pm/mitarbeiter/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
core()->page()->loadController("reg");
