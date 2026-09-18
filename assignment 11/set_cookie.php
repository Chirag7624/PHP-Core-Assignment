<?php

setcookie("fav_app", "Instagram", time() + (2 * 24 * 60 * 60));

echo "Cookie has been set.";

if (isset($_COOKIE["fav_app"])) {

    echo "My favourite app is: " . $_COOKIE["fav_app"];

} else {

    echo "Cookie not found.";

}

?>