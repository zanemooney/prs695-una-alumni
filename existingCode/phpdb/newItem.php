<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$newTitle = $_POST["newTitle"];
$newPrice = $_POST["newPrice"];
$sql = "INSERT INTO products (title, price) VALUES ('$newTitle', $newPrice)";

if ($conn->query($sql) === TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error adding record";
}

$conn->close();
?>

