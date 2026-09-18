<?php

$enteredPassword = "abc123";
$actualPassword = "abc123";

if ($enteredPassword == $actualPassword && !empty($enteredPassword)) {
    echo "Login Successful";
} else {
    echo "Login Failed";
}


// && :AND logical operator, meaning both conditions must be true for the login to succeed.
// == : checks values of both variables are equal or not

?>