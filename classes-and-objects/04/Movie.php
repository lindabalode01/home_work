<?php

class Movie {
    public string $title;
    public string $studio;
    public string $rating;

    function __construct(string $title, string $studio, string $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPg(array $movies) : array {
        $pg = [];
        foreach ($movies as $movie) {
            if ($movie->rating == "PG") {
                $pg[] = $movie;
            }
        }
        return $pg;
    }
}