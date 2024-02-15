<?php
session_start();

// Check if user is authenticated as admin
if(!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: index.php');
    exit();
}

// Check if form data is submitted
if(isset($_POST['username']) && isset($_POST['role'])) {
    $username = $_POST['username'];
    $role = $_POST['role'];
    
    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=alumni_database', 'username', 'password');
    
    // Prepare and execute the SQL query
    $stmt = $pdo->prepare('INSERT INTO users (username, role) VALUES (:username, :role)');
    $stmt->execute(['username' => $username, 'role' => $role]);
    
    // Redirect to admin panel
    header('Location: admin_panel.php');
    exit();
} else {
    echo "Form data not provided.";
}
?>
