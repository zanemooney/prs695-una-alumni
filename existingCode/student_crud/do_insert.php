<?php

$name = $_POST("name");
$email = $_POST("email");
$section = $_POST("section");
$dob = $_POST("dob");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO person (name, email, section, dob)
VALUES ('$name', '$email', '$section', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.php");
?>
