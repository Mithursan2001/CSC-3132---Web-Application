<?php
$connection = mysqli_connect("localhost", "root", "", "book_store");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $price = trim($_POST['price']);
    $category = trim($_POST['category']);

    if ($title == "" || $author == "" || $price == "" || $category == "") {
        echo "Error: All fields are required.";
        exit;
    }

    if ($price <= 0) {
        echo "Error: Price must be greater than 0.";
        exit;
    }

    $stmt = $connection->prepare("INSERT INTO books (title, author, price, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $title, $author, $price, $category);

    if ($stmt->execute()) {
        echo "Book inserted successfully!";
    } else {
        echo "Error inserting book: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($connection);
?>
