<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error deleting record";
}

$conn->close();
?>

