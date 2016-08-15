<?php
/**
 * Adds the Floating Button Elements
 * Back to Dashboard Function
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */

core()->materialize()->addFixedNavElement("/pm/mitarbeiter/dashboard", "Zurück", "call_missed");
core()->materialize()->showFixedNavElement();
core()->page()->loadController("reg");
