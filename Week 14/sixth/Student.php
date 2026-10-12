<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
echo "Success. Connected to database<br>";

// Create table
$sql = "CREATE TABLE student (
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT(3))";

if ($conn->query($sql) === TRUE) {
    echo "Table 'student' created successfully<br>";

    // Insert data
    $conn->query("INSERT INTO student (firstname, lastname, age) VALUES ('Nimal', 'Perera', 35)");
    $conn->query("INSERT INTO student (firstname, lastname, age) VALUES ('Amal', 'Silva', 33)");

    echo "Data inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>