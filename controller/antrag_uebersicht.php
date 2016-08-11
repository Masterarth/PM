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

if (isset($_POST["antrag_search"])) {
    if (is_numeric($_POST["antrag_search"])) {
        header('Location: /pm/antrag/' . $_POST["antrag_search"]);
        exit;
    } else {
        $projekte = core()->db()->select("select * from projekt where concat_ws(' ',titel,p_nummer) like '%" . $_POST["antrag_search"] . "%'");
    }
}else {
    $projekte = core()->db()->select("select * from projekt");
}

$projekte = core()->db()->select("select * from projekt");

if($projekte!=null){
    core()->smarty()->assign("projekte", $projekte);
}


