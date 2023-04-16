<?php
require_once 'Movie.php';
class MovieStorage
{
    public array $movies;
public function __construct(array $movies){
    $this->movies = $movies;
}
public function getMovies():array{
    return $this->movies;
}
public function addMovie(Movie $movie):void{
    $this->movies[] = $movie;
}

    /**
     * @return Movie[]
     */
    public function getPg(string $rating) : array {
        $pg = [];
        foreach ($this->movies as $movie) {
            if ($movie->getRating() == $rating) {
                $pg[] = $movie;
            }
        }
        return $pg;
    }
}