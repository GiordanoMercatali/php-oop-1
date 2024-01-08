<?php
require_once __DIR__ . "/Models/Movie.php";

$avengers_endgame = new Movie ('Avengers Endgame', ['Superhero', 'Action'], '2019', [5, 3, 4, 4, 5]);
// var_dump($avengers_endgame);
// echo $avengers_endgame->avg_review($avengers_endgame->reviews);
$avatar = new Movie ('Avatar', ['Sci-fi', 'Action'], '2010', [5, 4, 4, 5, 5]);

$movies = [
    $avengers_endgame,
    $avatar,
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <ul>
            <?php foreach($movies as $movie){ ?>
                <li>
                    <?php echo $movie->name . ' is a ' . $movie->displayGenresString() . ' movie released in ' . $movie->year . '. It has a rating of ' . $movie->avg_review($movie->reviews) . ' stars. ' ?>
                </li>
                <?php } ?>
        </ul>

</body>
</html>