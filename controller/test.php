<?php

/**
 * Page for tests
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */
//$c = new pm_pdfcreator(1);
//$c->createPdf();
//echo $c->o_project["id"];
//core()->smarty()->assign("showNavbar", FALSE);
//core()->smarty()->assign("showNavButton", FALSE);
//
//
//
//echo "\n\n <h1>--------------------</h1>";
//$c1 = new pm_capitalflow(0,400,100);
//var_dump($c1);
//
//$c2 = new pm_capitalflow(1, 200, 100);
//var_dump($c2);
//
//echo "\n\n <h1>--------------------</h1>";
//
//$arr = array();
//$arr[0] = $c1;
//$arr[1] = $c2;
//
//
//$capitalvalmeth = new pm_capitalvaluemethod(2,0.01,0.01,200,$arr);
//var_dump($capitalvalmeth);
//$capitalvalmeth->calculateCapitalValue();
//
//echo "<h1>---------------------------</h1>";
//var_dump($capitalvalmeth);
//
//
//------------------------------------------------------------------------------
//---------------------------------------/\-------------------------------------
//---------------------------------------||-------------------------------------
//--------------------------------------O--O-------------------------------------
//------------------------------------------------------------------------------
// Der ultimative random algo für die perfekte Kino Film wahl :D 
// Copyright by Scriptkiddys & co. 
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//$filme = array("pets", "tarzan", "ninja", "bourne", "CONJURING");
//
//for ($index = 0; $index <= rand(1, count($filme)); $index++) {
//    $zahl = array_rand($filme);
//}
//
//echo "<hr><center><h1>" . $filme[$zahl] . "</h1></center><hr>";
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//$dir = "controller";
//
//if (file_exists(realpath($dir))) {
//    $files = scandir($dir);
//
//    if (count($files) > 0) {
//        foreach ($files as $file) {
//            if ($file != "." && $file != "..") {
//                echo '"' . pathinfo($file, PATHINFO_FILENAME) . '"' . " => array('Admin'),<br/>";
//            }
//        }
//    }
//}

$col1 = array();
$col1["id"] = "";
$col1["label"] = "Topping";
$col1["pattern"] = "";
$col1["type"] = "string";
//print_r($col1);
$col2 = array();
$col2["id"] = "";
$col2["label"] = "Slices";
$col2["pattern"] = "";
$col2["type"] = "number";
//print_r($col2);
$cols = array($col1, $col2);
//print_r($cols);

$cell0["v"] = "Mushrooms";
$cell0["f"] = null;
$cell1["v"] = 3;
$cell1["f"] = null;
$row0["c"] = array($cell0, $cell1);

$cell0["v"] = "Onion";
$cell1["v"] = 1;
$row1["c"] = array($cell0, $cell1);

$cell0["v"] = "Olives";
$cell1["v"] = 1;
$row2["c"] = array($cell0, $cell1);

$cell0["v"] = "Zucchini";
$cell1["v"] = 1;
$row3["c"] = array($cell0, $cell1);

$cell0["v"] = "Pepperoni";
$cell1["v"] = 2;
$row4["c"] = array($cell0, $cell1);

//$rows=array($row0,$row1,$row2,$row3,$row4);
$rows = array();
array_push($rows, $row0);
array_push($rows, $row1);
array_push($rows, $row2);
array_push($rows, $row3);
array_push($rows, $row4);


//print_r($rows);

$data = array("cols" => $cols, "rows" => $rows);
print_r($data);
//echo json_encode($data);
