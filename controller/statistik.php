<?php

/**
 * Controller for the Stats Stuff
 *
 * @author Lukas Adler
 */
core()->materialize()->addFixedNavElement("/pm/stammdaten", "Zurück", "call_missed", "black");
core()->materialize()->showFixedNavElement();

core()->smarty()->assign("statistik", core()->stats());