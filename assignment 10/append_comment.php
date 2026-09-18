<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $comment = $_POST["comment"];

    $file = fopen("comments.txt", "a");


    fwrite($file, $comment . "\n");

    fclose($file);

    echo "Comment added successfully!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
</head>
<body>

<h2>Add a Comment</h2>

<form method="POST">

    <label>Comment:</label><br>
    <textarea name="comment" rows="4" cols="40" required></textarea>
    <br><br>

    <input type="submit" value="Add Comment">

</form>

</body>
</html>