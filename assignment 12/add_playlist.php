<?php
session_start();

// Ask for name if it is not already stored
if (!isset($_SESSION["username"])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
        $_SESSION["username"] = $_POST["username"];
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Enter Name</title>
        </head>
        <body>

        <h2>Welcome!</h2>

        <form method="POST">
            <label>Enter your name:</label>
            <input type="text" name="username" required>
            <input type="submit" value="Continue">
        </form>

        </body>
        </html>
        <?php
        exit();
    }
}

// Playlist logic
if (!isset($_SESSION["playlists"])) {
    $_SESSION["playlists"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST["playlist_name"])) {

    $name = $_POST["playlist_name"];
    $description = $_POST["description"];

    $newPlaylist = [
        "name" => $name,
        "description" => $description
    ];

    $_SESSION["playlists"][] = $newPlaylist;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Playlist</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>! 👋</h2>

<h3>Add New Playlist</h3>

<form method="POST">
    <label>Playlist Name:</label>
    <input type="text" name="playlist_name" required>
    <br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea>
    <br><br>

    <input type="submit" value="Add Playlist">
</form>

<br>

<a href="display_playlists.php">View Playlists</a>

</body>
</html>