<?php

include 'connection.php';

$stu_reg_num = $_POST['stuReg'];

$sql = "DELETE FROM $student_table WHERE reg_number = '$stu_reg_num'";

if ($conn->query($sql)) {
    echo "Student Deleted Successfully";
}
?>