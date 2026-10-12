<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$conn->query("CREATE DATABASE IF NOT EXISTS mydatabase");
$conn->select_db("mydatabase");

// Create table
$conn->query("CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Age INT
)");

// ----------------------- INSERT DATA -----------------------
if (isset($_POST["submit"])) {
    $firstname = $conn->real_escape_string($_POST["firstname"]);
    $lastname = $conn->real_escape_string($_POST["lastname"]);
    $age = isset($_POST["age"]) ? (int)$_POST["age"] : 0;

    $conn->query("INSERT INTO students (FirstName, LastName, Age)
                  VALUES ('$firstname', '$lastname', $age)");
}

// ----------------------- DELETE DATA -----------------------
if (isset($_GET["delete"])) {
    $id = isset($_GET["delete"]) ? (int)$_GET["delete"] : 0;
    if ($id > 0) {
        $conn->query("DELETE FROM students WHERE id=$id");
        header("Location: index.php");
        exit;
    }
}

// ----------------------- UPDATE DATA -----------------------
if (isset($_POST["update"])) {
    $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
    $firstname = $conn->real_escape_string($_POST["firstname"]);
    $lastname = $conn->real_escape_string($_POST["lastname"]);
    $age = isset($_POST["age"]) ? (int)$_POST["age"] : 0;

    if ($id > 0) {
        $conn->query("UPDATE students 
                      SET FirstName='$firstname', LastName='$lastname', Age=$age
                      WHERE id=$id");
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #eee; }
        form { margin-bottom: 20px; }
        input[type=text], input[type=number] { padding: 5px; margin: 5px; }
        button { padding: 5px 10px; }
    </style>
</head>
<body>

<h2>Student Entry Form</h2>

<?php
// ----------------------- EDIT FORM -----------------------
if (isset($_GET["edit"])) {
    $id = isset($_GET["edit"]) ? (int)$_GET["edit"] : 0;

    if ($id > 0) {
        $result = $conn->query("SELECT * FROM students WHERE id=$id");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<h3>Edit Student</h3>
<form method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    First Name: <input type="text" name="firstname" value="<?= htmlspecialchars($row['FirstName']) ?>" required><br>
    Last Name: <input type="text" name="lastname" value="<?= htmlspecialchars($row['LastName']) ?>" required><br>
    Age: <input type="number" name="age" value="<?= $row['Age'] ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>
<?php
        }
    }
} else {
?>

<!-- Normal Input Form -->
<form method="POST">
    First Name: <input type="text" name="firstname" required><br>
    Last Name: <input type="text" name="lastname" required><br>
    Age: <input type="number" name="age" required><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php } ?>

<!-- DISPLAY TABLE -->
<h3>Student Records</h3>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM students");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        echo "<tr>
                <td>{$id}</td>
                <td>" . htmlspecialchars($row['FirstName']) . "</td>
                <td>" . htmlspecialchars($row['LastName']) . "</td>
                <td>{$row['Age']}</td>
                <td>
                    <a href='index.php?edit={$id}'>Edit</a> | 
                    <a href='index.php?delete={$id}' onclick='return confirm(\"Delete this record?\");'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found.</td></tr>";
}
?>
</table>

</body>
</html>

<?php
$conn->close();
?>
