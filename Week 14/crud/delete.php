<?php
$conn = new mysqli("localhost", "root", "", "university");

$id = $_GET["id"];

$conn->query("DELETE FROM students WHERE id=$id");
$conn->close();

header("Location: input.php");
?>
