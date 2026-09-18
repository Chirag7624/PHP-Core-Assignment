<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email)) {
        echo "<p>Email is required.</p>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email address.</p>";
    }
    else {
        echo "<h2>Signup Successful</h2>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Music App Signup</title>
</head>
<body>

<h2>Music Playlist App - Signup</h2>

<form method="POST">

    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Email:</label>
    <input type="text" name="email">
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Sign Up">

</form>

</body>
</html>