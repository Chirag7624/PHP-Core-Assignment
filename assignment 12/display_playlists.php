<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: add_playlist.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Playlists</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>! 👋</h2>

<h3>My Playlists</h3>

<?php

if (!isset($_SESSION["playlists"]) || empty($_SESSION["playlists"])) {

    echo "No playlists found.";

} else {

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>";
    echo "<th>Playlist Name</th>";
    echo "<th>Description</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    foreach ($_SESSION["playlists"] as $index => $playlist) {

        echo "<tr>";

        echo "<td>" . htmlspecialchars($playlist["name"]) . "</td>";

        echo "<td>" . htmlspecialchars($playlist["description"]) . "</td>";

        echo "<td>";
        echo "<a href='edit_playlist.php?id=" . $index . "'>Edit</a>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";
}

?>

<br>
<a href="add_playlist.php">Add New Playlist</a>

</body>
</html>