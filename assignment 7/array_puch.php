<?php

$playlist = [
    "old town road",
    "Perfect",
    "no lie"
];

array_push($playlist, "Faded", "Havana");


sort($playlist);

foreach ($playlist as $song) {
    echo $song . "<br>";
}

echo "<br>Total songs: " . count($playlist);

?>