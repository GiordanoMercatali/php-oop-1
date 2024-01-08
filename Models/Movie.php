<?php
class Movie{
    public $name;
    public $genres;
    public $year;
    public $reviews; //Vote from 1 to 5

    function __construct($_name, $_genres, $_year, $_reviews) {
        $this->name = $_name;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->reviews = $_reviews;
    }

    public function avg_review(){
        return array_sum($this->reviews) / count($this->reviews);
    }

    public function displayGenresString(){
        $string = "";
        foreach($this->genres as $genre){
            $string .= $genre . ' ';
        }
        return $string;
    }
}
?>