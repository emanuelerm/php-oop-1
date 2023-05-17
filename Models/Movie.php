<?php
include __DIR__ . '/Genre.php';
class Movie 
{
    public
    $title, $cover, $time, $language, $genre;

    public function __construct(string $title, string $cover, int $time, string $language, Genre $genre)
    {
        $this->title = $title;
        $this->cover = $cover;
        $this->time = $time;
        $this->language = $language;
        $this->genre = $genre;
    }

    public function getDetails(){

        return "Duration: $this->time Language: $this->language Genre: {$this->genre->name}";
    }
}
