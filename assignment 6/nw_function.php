<?php

function formatFollowersCount($number) {

    if ($number >= 1000000) {
        return number_format($number / 1000000, 1) . "M";
    } elseif ($number >= 1000) {
        return number_format($number / 1000, 1) . "K";
    } else {
        return (string)$number;
    }
}

// examples
echo formatFollowersCount(1500) . "<br>";
echo formatFollowersCount(1200000) . "<br>";
echo formatFollowersCount(500) . "<br>";

?>