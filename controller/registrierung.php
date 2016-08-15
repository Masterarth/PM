<?php
/**
 * Loads the Controller for the Registration of an Employee
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);
core()->smarty()->assign("", FALSE);

core()->page()->loadController("reg");

