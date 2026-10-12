<?php
$conn = new mysqli("localhost", "root", "", "university");

$id        = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$age       = $_POST["age"];

$sql = "UPDATE students 
        SET firstname='$firstname', lastname='$lastname', age='$age'
        WHERE id=$id";

$conn->query($sql);
$conn->close();

header("Location: input.php");
?>
