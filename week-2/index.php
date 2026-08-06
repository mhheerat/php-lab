<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online job Application System</title>
</head>

<body>
    <h2>Online Job Application Form</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <label>Applicant ID :</label>
        <input type="text" name="applicant_id">
        <br><br>

        <label>Full Name :</label>
        <input type="text" name="name">
        <br><br>

        <label>Email :</label>
        <input type="email" name="email">
        <br><br>

        <label>Phone :</label>
        <input type="text" name="phone">
        <br><br>

        <label>Password :</label>
        <input type="password" name="password">
        <br><br>

        <label>Gender :</label><br>
        <input type="radio" name="gender" value="male">
        Male <br>
        <input type="radio" name="gender" value="female">
        Female
        <br><br>

        <label>Job Position</label>
        <select name="position">
            <option value="sd">Software Development</option>
            <option value="wd">Web Development</option>
            <option value="da">Database Addministration</option>
            <option value="ne">Network Engineer</option>
        </select><br><br>

        <label>Educational Qualification :</label>
        <input type="text" name="education">
        <br><br>
        <label>Address</label><br>
        <textarea name="address" rows="5" cols="40"></textarea>
        <br><br>

        <label>Upload CV :</label>
        <input type="file" name="document">
        <br><br>

        <input type="submit" value="register">


    </form>
</body>

</html>