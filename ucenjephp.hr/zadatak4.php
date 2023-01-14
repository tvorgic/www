<?php

$i = isset($_GET['i']) ? $_GET['i'] : 0;
$j = isset($_GET['j']) ? $_GET['j'] : 0;

if($i < $j) {
    echo $i * $j, '<br>';
} else {
    echo $i - $j, '<br>';
}

echo $i1<$j ? $i * $j : $i * $j;