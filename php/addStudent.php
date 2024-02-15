<?php

require "connection.php";

$reg_number = $_POST['regNumber'];
$name = $_POST['name'];
$standard = $_POST['standard'];
$section = $_POST['section'];
$dob = $_POST['dob'];

$sql = "INSERT INTO $student_table(reg_number, student_name, student_class, student_section, student_dob) VALUES ('$reg_number','$name', '$standard', '$section', '$dob')";

if ($conn->query($sql)){
    echo "Student added successfully";
}else{
    echo "Check your details and try again";
}

?>