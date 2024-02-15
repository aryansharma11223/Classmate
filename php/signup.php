<?php

include "connection.php";
$user = $_POST['name'];
$user_name = $_POST['username'];
$user_pass = $_POST['password'];

$register = "INSERT INTO $admin_table (name, username, password) VALUES ('$user', '$user_name', '$user_pass')";

$result = $conn->query($register);

if(!$result){
    $message = "Unexpected Error!";
}else{
    $message = "Registration successfully";
}

echo "$message";
?>