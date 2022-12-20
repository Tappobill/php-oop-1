<?php

include_once __DIR__ . '/classi/movie.php';


$movie1 = new Movie("Spiderman", 2002, "fantasy", 15);

echo $movie1->title;
echo "<br>";
echo $movie1->year;
echo "<br>";
echo $movie1->genre;
echo "<br>";
echo $movie1->age;
echo "<br>";
echo $movie1->miaFunzione();
echo "<br>";
echo "<br>";
echo "<br>";

?>



<?php

include_once __DIR__ . '/classi/movie-2.php';

$movie2 = new Movie2("Fifa2022", 2022, 1);

echo $movie2->gioco;
echo "<br>";
echo $movie2->year;
echo "<br>";
echo $movie2->player;
echo "<br>";
echo $movie2->miaFunzione();
echo "<br>";

?>