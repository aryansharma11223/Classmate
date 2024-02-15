var detailsContainer = document.getElementById("detailsContainer");

function showDetails() {
    detailsContainer.style.display = "block";
}

function addStudent() {
    var regNumber = document.getElementById("regNumber").value;
    var name = document.getElementById("name").value;
    var standard = document.getElementById("standard").value;
    var section = document.getElementById("section").value;
    var dob = document.getElementById("dob").value;

    if (regNumber == "" || name == "" || standard == "" || section == "" || dob == "") {
        alert("Please Enter Details!");
        location.reload();
        return 0;
    }

    $.ajax({
        type: "POST",
        url: "php/addStudent.php",
        data: {
            regNumber: regNumber,
            name: name,
            standard: standard,
            section: section,
            dob: dob
        },
        success: function (data) {
            alert(data);
            window.location.reload();
        }
    })
}

function deleteStudent() {
    var stuReg = document.getElementById("regNumber").value;

    if (stuReg == "") {
        alert("Please Enter Registration Number!");
        location.reload();
        return 0;
    }

    $.ajax({
        type: "POST",
        url: "php/deleteStudent.php",
        data: {
            stuReg: stuReg
        },
        success: function (data) {
            alert(data);
            window.location.reload();
        }
    });
}

function updateDetails() {
    var stuReg = document.getElementById("regNumber").value;
    var name = document.getElementById("name").value;
    var className = document.getElementById("class").value;
    var section = document.getElementById("section").value;
    var dob = document.getElementById("dob").value;

    if (stuReg == "" || name == "" || className == "" || section == "" || dob == "") {
        alert("Please Enter Details!");
        location.reload();
        return 0;
    }

    $.ajax({
        type: "POST",
        url: "php/updateDetails.php",
        data: {
            stuReg: stuReg,
            name: name,
            className: className,
            section: section,
            dob: dob
        },
        success: function (data) {
            alert(data);
            window.location.reload();
        }
    });
}