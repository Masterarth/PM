<?php

/**
 * Destroys the Login-Session and Redirects to the Log-In
 * 
 * @author Artur Stalbaum
 * @since 15.08.2016
 */

session_destroy();
header('Location: /pm/anmelden');
exit;