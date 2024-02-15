<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmate | Forget Password</title>

    <!-- Manual CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/forget_password.css">
</head>

<body>
    <section id="main">
        <div class="top">
            <div class="back">
                <a href="index.php">
                    < Go Back</a>
            </div>
            <div class="header">
                <h1>Classmate</h1>
            </div>
            <div class=""></div>
        </div>
        <div class="container">
            <form method="post">
                <div class="form-container">
                    <input type="text" name="username" id="username" placeholder="Enter Username..." required>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Enter New Password..." required>
                </div>
                <button name="data" type="button" onclick="forgetPassword()">Set New Password</button>
            </form>
        </div>
    </section>
</body>
<script src="js/jQuery-3.7.1.js"></script>
<script>
    function forgetPassword() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(username == "" || password == ""){
            alert ("Please Enter Details!");
            location.reload();
        }

        $.ajax({
            type: "POST",
            url: "php/forgetPassword.php",
            data: {
                username: username,
                password: password
            },
            success: function (data) {
                alert(data);
                window.location = "index.php";
            }
        });
    }
</script>

</html>