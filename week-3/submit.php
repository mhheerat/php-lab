<?php
// submit.php
// Start the session
session_start();

// Get form data using POST method
$student_name = $_POST['student_name'];
$student_id   = $_POST['student_id'];
$email        = $_POST['email'];
$department   = $_POST['department'];

// Store Student Name and Student ID in Session
$_SESSION['student_name'] = $student_name;
$_SESSION['student_id']   = $student_id;

// Store Student Name in a Cookie for 1 hour (3600 seconds)
setcookie("student_name_cookie", $student_name, time() + 3600, "/");

// Redirect to dashboard to display the stored information
header("Location: dashboard.php");
exit();
?>
