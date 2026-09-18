<?php

if (isset($_GET["foodApp"])) {

    $foodApp = $_GET["foodApp"];
    $email = $_GET["email"];
    $review = $_GET["review"];

    echo "<h2>Feedback Submitted</h2>";

    echo "Favorite Food App: " . $foodApp . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Review: " . $review . "<br><br>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Food App Feedback</title>
</head>
<body>

    <h2>Food App Feedback</h2>

    <form action="feedback.php" method="GET">

        <label>Favorite Food App:</label>
        <input type="text" name="foodApp" placeholder="Zomato or Swiggy" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>
        <br><br>

        <label>Short Review:</label>
        <textarea name="review" placeholder="Write your review" required></textarea>
        <br><br>

        <input type="submit" value="Submit Feedback">

    </form>

</body>
</html>