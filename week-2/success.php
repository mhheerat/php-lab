<?php

$name = $_GET["name"] ?? "";
$applicant_id = $_GET["applicant_id"] ?? "";
$file = $_GET["file"] ?? "";

$request_name = $_REQUEST["name"] ?? "";
$request_id = $_REQUEST["applicant_id"] ?? "";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Successful</title>
</head>

<body>

    <h2>Registration Successful</h2>

    <p>
        <strong>Applicant ID:</strong>
        <?php echo htmlspecialchars($applicant_id); ?>
    </p>

    <p>
        <strong>Name:</strong>
        <?php echo htmlspecialchars($name); ?>
    </p>

    <p>
        <strong>Uploaded File:</strong>
        <?php echo htmlspecialchars($file); ?>
    </p>

    <p>
        <strong>Request Name:</strong>
        <?php echo htmlspecialchars($request_name); ?>
    </p>

    <p>
        <strong>Request ID:</strong>
        <?php echo htmlspecialchars($request_id); ?>
    </p>

    <a href="index.php">Register Another Student</a>

</body>

</html>