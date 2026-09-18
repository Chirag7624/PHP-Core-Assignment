<?php

session_start();


if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["logout"])) {

    
    unset($_SESSION["username"]);

    session_destroy();

    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>

<form method="POST">
    <input type="submit" name="logout" value="Logout">
</form>

</body>
</html>