<?php

$followers = 25000;

if ($followers > 100000) {
    echo "Blue Tick";
} else {
    if ($followers >= 10000) {
        echo "Rising Star";
    } else {
        if ($followers >= 1000) {
            echo "Active User";
        } else {
            echo "Newbie";
        }
    }
}

?>