<?php

$teams = ["Team A", "Team B"];

for ($t = 0; $t < 2; $t++) {

    echo "<h3>" . $teams[$t] . "</h3>";

    // 3 overs
    for ($over = 1; $over <= 3; $over++) {

        echo $teams[$t] . ", Over " . $over . ": ";

        // 6 balls in over
        for ($ball = 1; $ball <= 6; $ball++) {
            echo rand(1, 6) . " ";
        }

        echo "<br>";
    }

    echo "<br>";
}

/* 
Concepts used:

Outer for loop → Teams
Middle for loop → Overs (1–3)
Inner for loop → 6 balls per over
rand(1, 6) → Generates a random run between 1 and 6 for each ball

*/

?>