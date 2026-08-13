<?php
// logout.php
// Start the session before destroying it
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect back to dashboard to show session data is gone
header("Location: dashboard.php");
exit();
?>
