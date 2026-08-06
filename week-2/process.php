<?php


$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $applicant_id = $_POST["applicant_id"];
    $_name = $_POST["name"];
    $_email = $_POST["email"];
    $_phone = $_POST["phone"];
    $_password = $_POST["password"];
    $_gender = $_POST["gender"] ?? "";
    $_position = $_POST["position"];
    $_education = $_POST["education"];
    $_address = $_POST["address"];

    if (empty($applicant_id)) {
        $errors[] = "Applicant id is required.";
    }
    if (empty($_name)) {
        $errors[] = "Full name is required.";
    }
    if (empty($_email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address";
    }

    if (empty($_phone)) {
        $errors[] = "Phone Number rwquired.";
    } elseif (strlen($_phone) != 11) {
        $errors[] = "Invalid phone number.";
    }

    if (empty($_password)) {
        $errors[] = "Password is rwquired.";
    } elseif (strlen($_password) < 6) {
        $errors[] = "Invalid password";
    }

    if (empty($_gender)) {
        $errors[] = "Gender is not selected.";
    }
    if (empty($_position)) {
        $errors[] = "Position is not selected.";
    }
    if (empty($_education)) {
        $errors[] = "Educational qualification is required.";
    }
    if (empty($_address)) {
        $errors[] = "Address id required.";
    }
    if (!isset($_FILES["document"]) || $_FILES["document"]["error"] != 0) {
        $errors[] = "Please upload your cv.";
    } else {
        $file_name = $_FILES["document"]["name"];
        $file_size = $_FILES["document"]["size"];
        $file_tmp = $_FILES["document"]["tmp_name"];
        $file_type = $_FILES["document"]["type"];

        $allowed_type = [
            "application/pdf",
            "application/msword"
        ];

        if (!in_array($file_type, $allowed_type)) {
            $errors[] = "only pdf, doc and docx is allowed.";
        }

        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "File size must be less then 2 mb.";
        }
    }

    if (count($errors) == 0) {
        $upload_folder = "uploads/";

        $new_file_name = time() . "_" . basename($file_name);

        $file_path = $upload_folder . $new_file_name;

        move_uploaded_file($file_tmp, $file_path);

        header(
            "Location: success.php?name=" .
                urlencode($_name) .
                "&id=" .
                urlencode($applicant_id) .
                "&file=" .
                urlencode($new_file_name)
        );
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Result</title>
</head>

<body>

    <h2>Registration Result</h2>
    <?php
    if (count($errors) > 0) {

        echo "<h3>Registration Failed </h3>";
        foreach ($errors as $error) {

            echo "<p> $error</p>";
        }
        echo '<a href="index.php">Go Back</a>';
    } else {

        echo "<p>Registration successful.</p>";
    }
    ?>

</body>

</html>