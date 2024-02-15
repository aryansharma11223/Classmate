var regBtn = document.getElementById("regBtn");
var logBtn = document.getElementById("logBtn");
var regForm = document.getElementById("regForm");
var logForm = document.getElementById("logForm");
var message = document.getElementById("registrationMessage");

function showRegForm() {
    regBtn.classList.add("active");
    logBtn.classList.remove("active");
    regForm.style.display = "block";
    logForm.style.display = "none";
    message.style.display = "none";
}

function showLogForm() {
    regBtn.classList.remove("active");
    logBtn.classList.add("active");
    regForm.style.display = "none";
    logForm.style.display = "block";
    message.style.display = "none";
}

function signUp() {
    var name = document.getElementById("regName").value;
    var username = document.getElementById("regUsername").value;
    var password = document.getElementById("regPassword").value;

    if (name == "" || username == "" || password == "") {
        alert ("Please Enter Details!");
        location.reload();
        return 0;
    }

    $.ajax({
        type: "POST",
        url: "php/signup.php",
        data: {
            name: name,
            username: username,
            password: password
        },
        success: function (data) {
            message.innerHTML = data;
        }
    });

    message.style.display = "block";
}

function logIn() {
    var username = document.getElementById("logUsername").value;
    var password = document.getElementById("logPassword").value;

    if (username == "" || password == "") {
        alert ("Please Enter Details!");
        location.reload();
        return 0;
    }

    $.ajax({
        type: "POST",
        url: "php/login.php",
        data: {
            username: username,
            password: password
        },
        success: function (data) {
            if (data>0) {
                window.location = "welcome.php";
            } else {
                message.innerHTML = "No User Found!";
                message.style.display = "block";
            }
        }
    });
}