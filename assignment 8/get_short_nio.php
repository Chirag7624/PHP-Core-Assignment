<?php

function getShortBio($bio) {

    // Remove extra space
    $bio = trim($bio);

    if (strlen($bio) > 30) {
        return substr($bio, 0, 30) . "...";
    } else {
        return $bio;
    }
}

$bio = "Travel lover | Foodie | Music enthusiast | Photographer";

echo getShortBio($bio);

?>