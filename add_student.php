<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmate | Add Student</title>

    <!-- Manual CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/fields.css">
    <link rel="stylesheet" href="css/add_student.css">
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
            <h2>Add Student</h2>
        </div>
        <div class="form-container">
            <form action="" method="post">
                <div class="field-container">
                    <div class="field">
                        <label for="regNumber">Registration Number</label>
                        <br>
                        <input type="text" name="regNumber" id="regNumber">
                    </div>
                    <div class="field">
                        <label for="name">Name</label>
                        <br>
                        <input name="name" type="text" id="name">
                    </div>
                    <div class="field">
                        <label for="class">Class</label>
                        <br>
                        <input name="class" type="text" id="standard">
                    </div>
                    <div class="field">
                        <label for="section">Section</label>
                        <br>
                        <input name="section" type="text" id="section">
                    </div>
                    <div class="field">
                        <label for="dob">Date of Birth</label>
                        <br>
                        <input name="dob" type="date" placeholder="none" id="dob">
                    </div>
                </div>
                <div class="search-btn">
                    <button name="data" type="button" onclick="addStudent()">Add Student</button>
                </div>
            </form>
            <div class="message">
                <h5 id="addStudentMessage"></h5>
            </div>
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