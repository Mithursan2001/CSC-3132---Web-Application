<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "university";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $age = $_POST["age"];

    $sql= "INSERT INTO students (firstname,lastname, age) VALUES  
        ('$firstName', '$lastName',$age)";

    if($conn->query($sql) === TRUE){
        header("Location: input.php");
        exit();
    }else{
        echo "Error inserting data:".$conn->error;
    }

    $conn->close();
?>