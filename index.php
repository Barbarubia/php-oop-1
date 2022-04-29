<?php

class Movie
{
    private string $title;
    private string $genre1;
    private string $genre2;
    private string $genre3;
    private string $genre4;
    private int $year;
    private string $nationality;
    private string $originalLanguage;
    private string $director;

    public function __construct($_title) {
        $this->title = $_title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setGenre1($_genre1) {
        return $this->genre1 = $_genre1;
    }

    public function setGenre2($_genre2) {
        return $this->genre2 = $_genre2;
    }

    public function setGenre3($_genre3) {
        return $this->genre3 = $_genre3;
    }

    public function setGenre4($_genre4) {
        return $this->genre4 = $_genre4;
    }

    public function setYear($_year) {
        return $this->year = $_year;
    }

    public function setNationality($_nationality) {
        return $this->nationality = $_nationality;
    }

    public function setOriginalLanguage($_originalLanguage) {
        return $this->originalLanguage = $_originalLanguage;
    }

    public function setDirector($_director) {
        return $this->director = $_director;
    }
}

$movie1 = new Movie('Back To The Future');
$movie1->setYear(1985);
$movie1->setNationality('USA');
$movie1->setOriginalLanguage('English');
$movie1->setDirector('Robert Zemeckis');
$movie1->setGenre1('Sci-Fi');
$movie1->setGenre2('Adventure');
$movie1->setGenre3('Comedy');
var_dump($movie1);