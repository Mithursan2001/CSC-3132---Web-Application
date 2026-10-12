<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection (no database selected yet)
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
echo "Success. Connected to database<br>";

// SQL to create a new database
$sql = "CREATE DATABASE myDB1";

if ($conn->query($sql) === TRUE) {
    echo "Database 'myDB1' created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
