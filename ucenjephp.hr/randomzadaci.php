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

echo "<hr>";


for($i =1; $i<=5;$i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
        if($j<$i){
            echo " ";
        }
    }
    echo" \n";
}

echo "<hr>";


for($i=1; $i<=5; $i++){
    for($j=5; $j<=$i; $j++){
        echo "*";
    }
    echo "\n";
}
echo "<hr>";


for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= 5; $col++)
    {
        echo '*';
    }

    echo "\n";
}

echo "<hr>";


for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= $row; $col++)
    {
        echo '*';
    }

    echo "\n";
}