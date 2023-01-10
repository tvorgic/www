<?php

// stranica prima dva broja putem GET parametara
// stranica ispisuje veći
// Ako su brojevi jednaki, stranica ispisuje: jednaki su

$b1 = isset($_GET['b1']) ? $_GET['b1'] : 0;
$b2 = isset($_GET['b2']) ? $_GET['b2'] : 0;
if($b1===$b2){
    echo 'Jednaki su'. '<br>';
}else if($b1>$b2){
    echo $b1 . '<br>';
}else{
    echo $b2 . '<br>';
}

// DOMAĆA ZADAĆA
// stranica prima TRI broja putem GET parametara
// stranica ispisuje najmanji broj
// Ako su svi brojevi jednaki, stranica ispisuje: jednaki su

$c1 = isset($_GET['c1']) ? $_GET['c1'] : 0;
$c2 = isset($_GET['c2']) ? $_GET['c2'] : 0;
$c3 = isset($_GET['c3']) ? $_GET['c3'] : 0;

if($c1 === $c2 && $c2 === $c3){
    echo 'jednaki su' . '<br>';
} else if($c1 < $c2 && $c2 < $c3){
    echo 'c1' . '<br>';
} else if($c2 < $c1 && $c2 < $c3){
    echo 'c2' . '<br>';
} else if($c3 < $c1 && $c3 < $c2){
    echo 'c3' . '<br>';
}