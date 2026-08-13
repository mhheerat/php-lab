<?php
// index.php
// Student Registration Form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Student Registration Form</h2>
        <form action="submit.php" method="POST">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="student_name" required>

            <label for="id">Student ID:</label>
            <input type="text" id="id" name="student_id" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
