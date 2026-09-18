<?php

$songTitle = "Shape Of You";

// Replace spaces with hyphens
$urlFriendlyTitle = str_replace(" ", "-", $songTitle);

echo $urlFriendlyTitle;

?>