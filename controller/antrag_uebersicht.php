<?php

$projekte = array();

for ($index = 1; $index <= 10; $index++) {
    $projekt = new pm_projekt($index);
    $projekt->setTitle("Projekt " . $index);
    $projekt->setBeschreibung("bla bla");
    $projekt->setBudget(10000);
    $projekt->setStarttermin(date("c"));
    $projekt->setEndtermin(date("c", strtotime("+1day")));
    $projekt->setMitarbeiteranzahl(rand(1, 10));
    $projekt->setNutzen("gibt keinen ...");
    $projekte[] = $projekt;
}

core()->smarty()->assign("projekte", $projekte);
