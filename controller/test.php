<?php

$capiFlow1 = new pm_capitalflow(1, 200, 50);
$capiFlow2 = new pm_capitalflow(2, 150, 30);

$arr = array();
$arr[0] = $capiFlow1;
$arr[1] = $capiFlow2;

$capitalvalmeth = new pm_capitalvaluemethod(2, 0.01, 0.01, 200, $arr);
