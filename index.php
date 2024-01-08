<?php
require_once __DIR__ . "/Models/Movie.php";

$avengers_endgame = new Movie ('Avengers Endgame', 'Superhero movie', '2019', [5, 4, 4, 5, 5]);
var_dump($avengers_endgame);
echo $avengers_endgame->avg_review($avengers_endgame->reviews);