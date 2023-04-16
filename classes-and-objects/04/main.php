<?php
require_once 'MovieStorage.php';

$movies = new MovieStorage([
    new Movie("Casino Royale", "Eon Productions", "PG-13"),
    new Movie("Glass", "Buena Vista International", "PG-13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
]);
$pgMovies = $movies->getPg('PG');
foreach ($pgMovies as $movie){
    echo $movie->getTitle().PHP_EOL;
}



