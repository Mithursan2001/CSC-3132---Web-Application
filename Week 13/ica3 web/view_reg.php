<?php
// view_registrations.php

// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "student_registration";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all records from registrations table
$sql = "SELECT * FROM registrations ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching data: " . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registrations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="view-body">
    <div class="container view-container">
        <h1>Registered Students</h1>
        
        <?php
        // Check if there are any records
        if (mysqli_num_rows($result) > 0) {
            // Display results in HTML table
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Student Name</th>";
            echo "<th>Email</th>";
            echo "<th>Course</th>";
            echo "<th>Registered Date</th>";
            echo "</tr>";
            
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['course']) . "</td>";
                echo "<td>" . date('Y-m-d H:i:s', strtotime($row['created_at'])) . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            // If no data exists
            echo "<div class='no-data'>No students registered yet.</div>";
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
        
        <a href="index.html" class="back-link">← Back to Registration</a>
    </div>
</body>
</html>