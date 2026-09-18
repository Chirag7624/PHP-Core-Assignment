<?php


$file = fopen("my_playlist.txt", "w");


fwrite($file, "Believer\n");
fwrite($file, "Shape Of You\n");
fwrite($file, "Perfect\n");


fclose($file);

echo "Playlist written successfully!";

?>