<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: add_playlist.php");
    exit();
}

if (!isset($_GET["id"])) {
    echo "Playlist ID not found.";
    exit();
}

$id = $_GET["id"];

if (!isset($_SESSION["playlists"][$id])) {
    echo "Playlist not found.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $description = $_POST["description"];

    $_SESSION["playlists"][$id]["name"] = $name;
    $_SESSION["playlists"][$id]["description"] = $description;

    header("Location: display_playlists.php");
    exit();
}

$playlist = $_SESSION["playlists"][$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Playlist</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>! 👋</h2>

<h3>Edit Playlist</h3>

<form method="POST">

    <label>Playlist Name:</label>
    <input type="text" name="name"
           value="<?php echo htmlspecialchars($playlist["name"]); ?>"
           required>

    <br><br>

    <label>Description:</label><br>

    <textarea name="description"
              rows="5"
              cols="40"
              required><?php echo htmlspecialchars($playlist["description"]); ?></textarea>

    <br><br>

    <input type="submit" value="Update Playlist">

</form>

<br>

<a href="display_playlists.php">Back to Playlists</a>

</body>
</html>