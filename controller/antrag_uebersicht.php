<?php

//$projekte = array();
//
//for ($index = 1; $index <= 10; $index++) {
//    $projekt = new pm_projekt($index);
//    $projekt->setTitle("Projekt " . $index);
//    $projekt->setBeschreibung("bla bla");
//    $projekt->setBudget(rand(500, 100000));
//    $projekt->setStarttermin(date("c"));
//    $projekt->setEndtermin(date("c", strtotime("+" . rand(1, 10) . "day")));
//    $projekte[] = $projekt;
//
//    
//}

$projekte = core()->db()->select("select * from projekt");
if($projekte!=null){
    core()->smarty()->assign("projekte", $projekte);
}


