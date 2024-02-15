<?php
session_start();

// Check if user is authenticated as admin
if(!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: index.php');
    exit();
}

// Check if user ID is provided
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=alumni_database', 'username', 'password');
    
    // Prepare and execute the SQL query
    $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
    $stmt->execute(['id' => $id]);
    
    // Redirect to admin panel
    header('Location: admin_panel.php');
    exit();
} else {
    echo "User ID not provided.";
}
?>
