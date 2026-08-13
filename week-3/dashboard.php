<?php
// dashboard.php
// Start the session so we can access session variables
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Student Dashboard</h2>

        <h3>Session Data</h3>
        <?php if (isset($_SESSION['student_name']) && isset($_SESSION['student_id'])): ?>
            <p><strong>Student Name (Session):</strong> <?php echo htmlspecialchars($_SESSION['student_name']); ?></p>
            <p><strong>Student ID (Session):</strong> <?php echo htmlspecialchars($_SESSION['student_id']); ?></p>
        <?php else: ?>
            <p>No Session data found. It may have been removed.</p>
        <?php endif; ?>

        <h3>Cookie Data</h3>
        <?php if (isset($_COOKIE['student_name_cookie'])): ?>
            <p><strong>Student Name (Cookie):</strong> <?php echo htmlspecialchars($_COOKIE['student_name_cookie']); ?></p>
        <?php else: ?>
            <p>No Cookie data found. It may have been removed or expired.</p>
        <?php endif; ?>

        <div class="actions">
            <a href="logout.php"><button>Remove Session</button></a>
            <a href="remove_cookie.php"><button>Remove Cookie</button></a>
            <a href="index.php"><button>Back to Form</button></a>
        </div>
    </div>
</body>
</html>
