<?php

$file = fopen("trending.txt", "r");

$content = fread($file, filesize("trending.txt"));

fclose($file);

echo $content;

?>