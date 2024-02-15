<?php

include 'connection.php';

$stu_reg = $_POST['stuReg'];
$student_name = $_POST['name'];
$student_class = $_POST['className'];
$student_section = $_POST['section'];
$student_dob = $_POST['dob'];

$sql = "UPDATE $student_table SET
student_name = '$student_name',
student_class = $student_class,
student_section = '$student_section',
student_dob = '$student_dob'
WHERE reg_number = '$stu_reg'
";

if($conn->query($sql)){
    echo "Details Updates Successfully";
}else{
    echo "Error Updating Details";
}

?>