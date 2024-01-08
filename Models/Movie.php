<?php
class Movie{
    public $name;
    public $genre;
    public $year;
    public $reviews; //Vote from 1 to 5

    function __construct($_name, $_genre, $_year, $_reviews) {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->reviews = $_reviews;
    }

    public function avg_review($reviews){
        return array_sum($this->reviews) / count($this->reviews);
    }
}
?>