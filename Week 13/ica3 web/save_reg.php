<?php
// save_registration.php

// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "student_registration";

// Connect to MySQL database using mysqli
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Receive POST values
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    
    // Validate that none are empty
    if (empty($full_name) || empty($email) || empty($course)) {
        echo "<h3 style='color: red;'>Error: All fields are required.</h3>";
        echo "<a href='index.html'>Go Back</a>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3 style='color: red;'>Error: Invalid email format.</h3>";
        echo "<a href='index.html'>Go Back</a>";
    } else {
        // Use prepared statements to prevent SQL injection
        $stmt = mysqli_prepare($conn, "INSERT INTO registrations (full_name, email, course) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $course);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3 style='color: green;'>Student registered successfully.</h3>";
            echo "<p><a href='index.html'>Register Another Student</a></p>";
            echo "<p><a href='view_reg.php'>View All Registrations</a></p>";
        } else {
            $error_code = mysqli_stmt_errno($stmt);
            if ($error_code == 1062) { // Duplicate entry
                echo "<h3 style='color: red;'>Error: Email already registered.</h3>";
            } else {
                echo "<h3 style='color: red;'>Error: " . mysqli_stmt_error($stmt) . "</h3>";
            }
            echo "<a href='index.html'>Go Back</a>";
        }

        mysqli_stmt_close($stmt);
    }
}

// Close connection
mysqli_close($conn);
?>