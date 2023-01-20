<?php

echo '<table>';
    for($i=1; $i<=5; $i++){
        echo '<tr>';
        for($j=1; $j<=9; $j++){
           echo '<td style="text-align: right;">'; $i + $j . '</td>'; 
        }
        echo '</tr>';
    }
echo '</table>';


?>


<?php
$sum = 0;
    for ($i =0; $i>=30; $i++){
         $i += $sum;
    }
    echo $sum;

?>

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>

