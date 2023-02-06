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

echo "<hr>";

/*
    Homework
Review Solution

Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list.
*/
$movies = [
    [
        'title' => 'The Lord of the Rings: The Fellowship of the Ring',
        'director' => 'Peter Jackson',
        'releaseYear' => 2001
    ],

    [
        'title' => 'Blade Runner 2049',
        'director' => 'Denis Villeneuve',
        'releaseYear' => 2017
    ],

    [
        'title' => 'Pulp Fiction',
        'director' => 'Quentin Tarantino',
        'releaseYear' => 1994
    ]


];

foreach ($movies as $movie){
    echo $movie['title'], '<br>' . $movie['director'], '<br>' . $movie['releaseYear'], '<br>';
}



function filterMovie($movies){

    $filteredMovies = [];

    foreach ($movies as $movie){
      if($movie['releaseYear'] >= 2000){
        $filteredMovies[] = $movie; 
      }
    }
    return $filteredMovies;
}

filterMovie($movies);


for($i=1; $i <= 10; $i++){
    echo $i;
}

$sum = 0;

for($i =1; $i<=10; $i++){
    $sum += $i;
}
echo '<br>' . $sum;

echo '<br>';


for ($i=1; $i<=10; $i++){
    if($i < 10){
        echo $i . '-';
    } else echo $i;
}

echo '<br>';
echo "<hr>";


 $num = 0;
for($i=1; $i<=30; $i++){
    $num+=$i;
}

echo $num;

echo '<br>';
echo "<hr>";


/*
3. Create a script to construct the following pattern, using nested for loop. Go to the editor

*  
* *  
* * *  
* * * *  
* * * * *   
 */

 for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo '*';

        if($i<$j){
            echo ' ' ;
        } 

    }
    echo "\n";
 }



