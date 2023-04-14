<?php
require_once 'Movie.php';

$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG-13");
$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");

$movies = [$movie1, $movie2, $movie3];
$pgMovies = new Movie('Cat', 'Warner', 'PG - 12');
echo $pgMovies->getPg($movies);


