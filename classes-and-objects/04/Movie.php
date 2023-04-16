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
    public function getRating():string{
        return $this->rating;
    }
    public function getTitle():string{
        return $this->title;
    }
    public function getStudio():string{
        return $this->studio;
}
}