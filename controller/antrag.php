<?php

$request = core()->request()->getParams();

switch ($request[2]) {
    case "neu":
        core()->page()->loadPage("antrag_neu");
        break;
    case "uebersicht":
        core()->page()->loadPage("antrag_uebersicht");
        break;
}
