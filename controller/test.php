<?php

core()->smarty()->assign("showNavbar", FALSE);
core()->smarty()->assign("showNavButton", FALSE);



echo "\n\n <h1>--------------------</h1>";
$c1 = new pm_capitalflow(0,400,100);
var_dump($c1);

$c2 = new pm_capitalflow(1, 200, 100);
var_dump($c2);

echo "\n\n <h1>--------------------</h1>";

$arr = array();
$arr[0] = $c1;
$arr[1] = $c2;


$capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$arr);
var_dump($capitalvalmeth);
$capitalvalmeth->calculateCapitalValue();

echo "<h1>---------------------------</h1>";
var_dump($capitalvalmeth);
