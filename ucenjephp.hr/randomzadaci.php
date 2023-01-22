<?php

for($i = 1; $i <=10; $i++){
    if($i<10){
        echo $i, '-';
    } else {
        echo $i . "\n";
    }
}

echo "<hr>";

$sum = 0;

for($i = 1; $i <=30; $i++){
     $sum += $i;
}
echo $sum;