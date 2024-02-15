<?php
session_start();

// Check if user is authenticated
if(!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Display board resources
echo "<h2>Welcome, ".$_SESSION['username']."</h2>";
echo "<p>Here you can access the minutes and other resources necessary for your duties.</p>";
?>
