<?php

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE $admin_table SET
password = '$password'
WHERE username = '$username'
";

if($conn->query($sql)){
    echo "Password Changed Successfully";
}else{
    echo "Password Changed Failed";
}

?>