<?php

include("connection.php");

$user_name = $_POST["username"];
$user_pass = $_POST["password"];

$login = "SELECT * FROM $admin_table WHERE username = '$user_name' AND password = '$user_pass'";

$result = ($conn->query($login));
echo "$result->num_rows";

$details = $result->fetch_assoc();
session_start();
$_SESSION['name'] = $details['name'];

?>