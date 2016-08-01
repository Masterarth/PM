<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);
core()->smarty()->assign("pageTitle", FALSE);

core()->page()->loadController("reg");

