<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    echo "Success. Connected to database </br>";

    $sql= "CREATE DATABASE IF NOT EXISTS university";
    
    if($conn->query($sql) === TRUE){
        echo "Database cretaed successfully </br>";
    }else{
        echo "Error creatiing table:".$conn->error;
    }

    mysqli_select_db($conn,"university");

    $sql= "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50) NOT NULL,
        lastname VARCHAR(50) NOT NULL,
        age INT(6)
        )";
    
    if($conn->query($sql) === TRUE){
        echo "Students Table cretaed successfully</br>";
    }else{
        echo "Error creatiing table:".$conn->error;
    }

    $conn->close();
?>