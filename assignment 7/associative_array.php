<?php

// Associative array representing a social media profile
$userProfile = [
    "username" => "johndoe",
    "followers" => 1500,
    "posts" => 120
];

// Display value using foreach
foreach ($userProfile as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>