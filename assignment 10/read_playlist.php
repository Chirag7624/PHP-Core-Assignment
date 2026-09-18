<?php

$file = fopen("my_playlist.txt", "r");


$content = fread($file, filesize("my_playlist.txt"));

fclose($file);

$songs = explode("\n", $content);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Playlist</title>
</head>
<body>

<h2>My Favorite Songs</h2>

<ul>

<?php

foreach ($songs as $song) {
    echo "<li>" . $song . "</li>";
}

?>

</ul>

</body>
</html>