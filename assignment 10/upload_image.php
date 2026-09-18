<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fileName = $_FILES["profilePicture"]["name"];
    $fileTmpName = $_FILES["profilePicture"]["tmp_name"];
    $fileSize = $_FILES["profilePicture"]["size"];
    $fileType = $_FILES["profilePicture"]["type"];

    $allowedTypes = ["image/jpeg", "image/png"];

    $maxSize = 2 * 1024 * 1024;

    if (!in_array($fileType, $allowedTypes)) {

        echo "Only JPG and PNG images are allowed.";

    } elseif ($fileSize > $maxSize) {

        echo "File size must be less than 2 MB.";

    } else {

        if (!is_dir("uploads")) {
            mkdir("uploads");
        }

        move_uploaded_file(
            $fileTmpName,
            "uploads/" . $fileName
        );

        echo "Profile picture uploaded successfully!<br>";
        echo "File Name: " . $fileName;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture Upload</title>
</head>
<body>

<h2>Upload Profile Picture</h2>

<form method="POST" enctype="multipart/form-data">

    <label>Select Profile Picture:</label>
    <input type="file" name="profilePicture" accept=".jpg,.jpeg,.png" required>

    <br><br>

    <input type="submit" value="Upload Image">

</form>

</body>
</html>