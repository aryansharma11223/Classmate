<?php
    $server = "localhost";
    $server_username = "root";
    $password = "";
    $db = "classmate";
    $admin_table = "admin";
    $student_table = "student";

    
    $conn = new mysqli($server,$server_username,$password);
    $conn->query("CREATE DATABASE IF NOT EXISTS ".$db);
    $conn->select_db("$db");

    if($conn->connect_error){
        die("Server Connection Error: ".$conn->connect_error);
    }

    $create_table_admin = "CREATE TABLE IF NOT EXISTS $admin_table
    (id INTEGER(255) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL)";

    $conn->query($create_table_admin);

    $create_table_student = "CREATE TABLE IF NOT EXISTS $student_table
    (reg_number varchar(20) PRIMARY KEY,
    student_name varchar(255) NOT NULL,
    student_class int(2) NOT NULL,
    student_section varchar(1) NOT NULL,
    student_dob date NOT NULL)";

    $conn->query($create_table_student);
?>