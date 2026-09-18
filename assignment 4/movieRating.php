<?php

$rating = 8.5;

if ($rating >= 8) {
    echo "Blockbuster";
} elseif ($rating >= 6) {
    echo "Hit";
} elseif ($rating >= 4) {
    echo "Average";
} else {
    echo "Flop";
}

// → 8 or above = Blockbuster
// → 6 to 7.9 = Hit
// → 4 to 5.9 = Average
// → below 4 = Flop
?>