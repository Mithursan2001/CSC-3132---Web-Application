<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL without selecting a database
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS mydatabase";
$conn->query($sql);

// Select the database
$conn->select_db("mydatabase");

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS students (
    FirstName VARCHAR(15) NOT NULL,
    LastName VARCHAR(15) NOT NULL,
    Age INT
)";
$conn->query($sql);

// Insert record from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $age = (int)$_POST['age']; // cast to integer for safety

    $sql = "INSERT INTO students (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', $age)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

$conn->close();
?>

