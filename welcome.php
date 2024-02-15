<?php
error_reporting(0);
include 'php/connection.php';

$stu_reg_num = $_POST['regNumber'];
$stu_name = $_POST['name'];
$stu_class = $_POST['class'];
$stu_section = $_POST['section'];
$stu_dob = $_POST['dob'];

$sql = "SELECT * FROM $student_table WHERE
reg_number LIKE '%$stu_reg_num%' AND
student_name LIKE '%$stu_name%' AND
student_class LIKE '%$stu_class%' AND
student_section LIKE '%$stu_section%' AND
student_dob LIKE '%$stu_dob%'
";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmate | Welcome</title>

    <!-- Manual CSS Linking -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/welcome.css">

</head>

<body>
    <section id="header">
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

    <section id="container">
        <div class="form-heading">
            <h4>Search Students:</h4>
        </div>

        <div class="sub-container">
            <div class="form-container">
                <form action="welcome.php" method="post">
                    <div class="field-container">
                        <div class="field">
                            <label for="regNumber">Registration Number</label>
                            <br>
                            <input type="text" name="regNumber" id="">
                        </div>
                        <div class="field">
                            <label for="name">Name</label>
                            <br>
                            <input name="name" type="text">
                        </div>
                        <div class="field">
                            <label for="class">Class</label>
                            <br>
                            <input name="class" type="text">
                        </div>
                        <div class="field">
                            <label for="section">Section</label>
                            <br>
                            <input name="section" type="text">
                        </div>
                        <div class="field">
                            <label for="dob">Date of Birth</label>
                            <br>
                            <input name="dob" type="date" placeholder="none">
                        </div>
                    </div>
                    <div class="search-btn">
                        <input type="submit" value="Search">
                    </div>
                </form>
            </div>
            <div class="options">
                <a href="add_student.php">Add Student</a>
                <a href="update_details.php">Update Details</a>
                <a href="delete_student.php">Delete Student</a>
            </div>
        </div>
    </section>

    <section id="details">
        <table>
            <th>
            <td>Registration Number</td>
            <td>Name</td>
            <td>Class</td>
            <td>Section</td>
            <td>Date of Birth</td>
            </th>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>" . $row['reg_number'] . "</td>
                            <td>" . $row['student_name'] . "</td>
                            <td>" . $row['student_class'] . "</td>
                            <td>" . $row['student_section'] . "</td>
                            <td>" . $row['student_dob'] . "</td>
                        </tr>
                    ";
                }
            }
            ?>

        </table>
    </section>
</body>
<script src="js/jQuery-3.7.1.js"></script>
<script src="js/fill-details.js"></script>
<script>
    function logout() {
        $.ajax({
            url: "php/logout.php",
            success: function (data) {
                window.location = "index.php";
            }
        })
    }
</script>
</html>