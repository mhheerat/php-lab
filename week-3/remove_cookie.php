<?php
// remove_cookie.php
// Delete the cookie by setting its expiry time in the past
setcookie("student_name_cookie", "", time() - 3600, "/");

// Redirect back to dashboard to show cookie data is gone
header("Location: dashboard.php");
exit();
?>
