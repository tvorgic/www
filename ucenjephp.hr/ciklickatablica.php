<?php

//obrnuti raspored
/*
echo '<table>';
for($i=5;$i>=1;$i--){
    echo '<tr>';
    for($j=5;$j>=1;$j--){
        echo '<td style="text-align: right;">' . $i * $j, '</td>';
    }
    echo '</tr>';
}
echo '</table>';
*/

// dodavanje array-a
/*
$i=5;
$j=5;
$matrica=[];
echo '<table>';
for($i=5;$i>=1;$i--){
    $red=[];
    echo '<tr>';
    for($j=5;$j>=1;$j--){
    
        echo '<td style="text-align: right;">' . $i * $j, '</td>';
        $stupac=[];
        
    }
     echo '</tr>';
    
     
}
echo '</table>';
*/
/*
//definiranje vrijednosti
$a=5;
$b=5;

$matrica=[];

$rowstart = 0;
$rowend = -1;

$colstart =0;
$colend= -1;

$initial = 1;

for($i= $rowend; $i>=5; $i--){
    $matrica[$rowend][$i] = $initial++;
    echo $matrica;
    for($j=$colend;$j>=5;$j--){
        $matrica[$colend][$j];
        echo $i * $j;
    }

}


$a=5;
$b=5;

$matrica=[];

$rs = 0;
$re = -1;

$cs =0;
$ce= -1;

$init = 1;


for($i=$rs;$i<=$re;$i--){
    $matrica[$cs][$i]= $initial++;
    $cs++;

}

echo $matrica[$cs][$i];
+++++++++++++++++++++++++++++++++++++++++++++
// ovo dolje donekle radi
$a=5;
$b=5;
$matrica=[];
$rs = 0;
$re = -1;

$cs =0;
$ce= -1;

$init = 1;

echo '<table>';
for($i=5;$i>=1;$i--){
    $red=[];
    echo '<tr>';
    for($j=5;$j>=1;$j--){
    
        echo '<td style="text-align: right;">' . $i + $j, '</td>';
        $stupac=[];
        
    }
     echo '</tr>';
}

+++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

$a=5;
$b=5;
$matrica=[];
$rs = 0;
$re = -1;

$cs =0;
$ce= -1;

$init = 1;

echo '<table>';
for($i=5;$i>=0;$i--){
    $matrica=[];
    echo '<tr>';
    for($j=5;$j>=1;$j--){
    
        echo '<td style="text-align: right;">' . $i + $j, '</td>';
         $matrica=[]; //staviti dvije vrijednosti npr pocetna reda? red? stupac? i brojac?
                    // nakon toga if uvjet i brojac
        
    }
     echo '</tr>';
     
}

//barem nekakav napredak. proučiti dalje 

//definirati tablicu, koristiti while i prouciti kako se odvojeno krecu stupci i kolone.
//ne moze u isto vrijeme. oduzeti jedan od broja reda/stupca ovisi sto se popunjaava