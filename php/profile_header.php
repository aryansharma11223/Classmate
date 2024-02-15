<?php
session_start();
$name = $_SESSION['name'];
if($name == ""){
    header("Location: index.php");
}else {
    echo "<h5>Welcome $name</h5>";
}

?>