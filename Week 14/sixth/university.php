
//incorrect

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
echo "Success. Connected to database<br>";

$sql="CREATE DATABASE IF NOT EXISTS myDB1";

if ($conn->query($sql) === TRUE) {
    echo "created Database successfully<br>";
} else {
    echo "Error creating Database: " . $conn->error;
}
mysqli_select_db($conn,"myDB1");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS student (
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT(3))";

if ($conn->query($sql) === TRUE) {
    echo "Table 'student' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>