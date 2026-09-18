<?php

$appsArray = [
    "Instagram",
    "WhatsApp",
    "YouTube",
    "Paytm",
    "Spotify"
];

function isAppInstalled($appName, $appsArray) {

    if (in_array($appName, $appsArray)) {
        return "Installed";
    } else {
        return "Not Installed";
    }
}


echo "Paytm: " . isAppInstalled("Paytm", $appsArray) . "<br>";

echo "Facebook: " . isAppInstalled("Facebook", $appsArray);

?>