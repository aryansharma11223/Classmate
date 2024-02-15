<?php
error_reporting(0);
include 'php/connection.php';

$stu_reg_num = $_POST['regNumber'];

$sql = "SELECT * FROM $student_table WHERE
reg_number = '$stu_reg_num'
";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmate | Delete Student</title>

    <!-- Manual CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/fields.css">
    <link rel="stylesheet" href="css/delete_student.css">
</head>

<body>
    <section id="header">
        <div class="back">
            <a href="welcome.php">
                < Go Back</a>
        </div>
        <div class="profile">
            <?php
            require_once "php/profile_header.php";
            ?>
            <h5>|</h5>
            <button onclick="logout()">Logout</button>
        </div>
    </section>

    <section id="app">
        <div class="app-name">
            <h1>Classmate</h1>
        </div>
    </section>

    <section id="main">
        <div class="form-header">
            <h2>Delete Student</h2>
        </div>
        <div class="form-container">
            <form action="delete_student.php" method="post">
                <div class="field-container">
                    <div class="field">
                        <label for="regNumber">Registration Number</label>
                        <br>
                        <div class="find">
                            <input type="text" name="regNumber" value="<?php echo $stu_reg_num ?>" id="regNumber">
                            <input type="submit" value="Find">
                        </div>
                    </div>
                    <div class="field">
                        <label for="name">Name</label>
                        <br>
                        <input name="name" type="text" value="<?php echo $row['student_name'] ?>" disabled>
                    </div>
                    <div class="field">
                        <label for="class">Class</label>
                        <br>
                        <input name="class" type="text" value="<?php echo $row['student_class'] ?>" disabled>
                    </div>
                    <div class="field">
                        <label for="section">Section</label>
                        <br>
                        <input name="section" type="text" value="<?php echo $row['student_section'] ?>" disabled>
                    </div>
                    <div class="field">
                        <label for="dob">Date of Birth</label>
                        <br>
                        <input name="dob" type="text" value="<?php echo $row['student_dob'] ?>" disabled>
                    </div>
                </div>
                <div class="search-btn">
                    <button name="data" type="button" onclick="deleteStudent()">Delete Student</button>
                </div>
            </form>
        </div>
    </section>

</body>
<script src="js/jQuery-3.7.1.js"></script>
<script src="js/students.js"></script>
<script>
    function logout() {
        $.ajax({
            url: "php/logout.php",
            success: function (data){
                window.location = "index.php";
            }
        })
    }
</script>
</html>