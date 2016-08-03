<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);

$capiFlow1 = new pm_capitalflow(1, 200, 50);
$capiFlow2 = new pm_capitalflow(2, 150, 30);

$arr = array();
$arr[0] = $capiFlow1;
$arr[1] = $capiFlow2;

$capitalvalmeth = new pm_capitalvaluemethod(2, 0.01, 0.01, 200, $arr);

$c1 = new pm_capitalflow(2, 200, 100);
var_dump($c1);

echo "\n\n <h1>--------------------</h1>";

$c2 = new pm_capitalflow(1, 200, 100);
var_dump($c2);

echo "\n\n <h1>--------------------</h1>";

$arr = array();
$arr[0] = $c1;
$arr[1] = $c2;

var_dump($arr);
 $capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$arr);

