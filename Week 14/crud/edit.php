<?php
$conn = new mysqli("localhost", "root", "", "university");
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Firstname: <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
    Lastname: <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
    Age: <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>

    <input type="submit" value="Update">
</form>
