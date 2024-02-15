<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmate | Home</title>

    <!-- Manual CSS Linking -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="header">
        <div class="main-name">
            <h1>Classmate</h1>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="switch-bar">
                <input class="active" id="regBtn" type="button" value="Signup" onclick="showRegForm()">
                <input id="logBtn" type="button" value="Login" onClick="showLogForm()">
            </div>
            <div class="panel-container">
                <div class="reg-form" id="regForm">
                    <div class="form-container">
                        <form action="php/signup.php" method="post" id="regFormData">
                            <div class="form-fields">
                                <input type="text" name="name" id="regName" placeholder="Enter Name..." required>
                                <br>
                                <input type="text" name="username" id="regUsername" placeholder="Enter Username..." required>
                                <br>
                                <input type="password" name="password" id="regPassword" placeholder="Enter Password..." required>
                            </div>
                            <button name="data" type="button" onclick="signUp()">Signup</button>
                        </form>
                    </div>
                </div>
                <div class="log-form" id="logForm">
                    <div class="form-container">
                        <form action="" method="post">
                            <div class="form-fields">
                                <input type="text" name="username" id="logUsername" placeholder="Enter Username..." required>
                                <br>
                                <input type="password" name="password" id="logPassword" placeholder="Enter Password..." required>
                            </div>
                            <div class="forget-pass">
                                <a href="forget_password.php">Forget Password?</a>
                            </div>
                            <button name="data" type="button" onclick="logIn()">Signin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom">
        <div class="message">
            <h5 id="registrationMessage"></h5>
        </div>
        <div class="panel-name">
            <h4>Admin Panel</h4>
        </div>
    </section>



</body>
<script src="js/jQuery-3.7.1.js"></script>
<script src="js/admin.js"></script>
</html>