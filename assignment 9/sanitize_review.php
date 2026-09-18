<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get review from POST
    $review = $_POST["review"];

    // Remove extra spaces and HTML tags
    $review = trim($review);
    $review = strip_tags($review);

    echo "<h2>Cleaned Review</h2>";
    echo $review;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Review Form</title>
</head>
<body>

<h2>Enter Your Review</h2>

<form method="POST">

    <label>Review:</label><br>
    <textarea name="review" rows="5" cols="40" required></textarea>
    <br><br>

    <input type="submit" value="Submit Review">

</form>

</body>
</html>