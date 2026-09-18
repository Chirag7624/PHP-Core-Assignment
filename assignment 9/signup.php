<?php

if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<h2>Signup Successful</h2>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br><br>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Music App Signup</title>
</head>
<body>

    <h2>Music Playlist App - Signup</h2>

    <form action="signup.php" method="POST">

        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Sign Up">

    </form>

</body>
</html>