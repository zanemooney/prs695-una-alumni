<?php
session_start();

// Check if username is provided
if(isset($_POST['username'])) {
    // Check if the provided username is in the database
    $username = $_POST['username'];
    $pdo = new PDO('mysql:host=localhost;dbname=alumni_database', 'admin');
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user) {
        // Store username in session
        $_SESSION['username'] = $username;
        // Redirect based on user role
        if($user['role'] == 'admin') {
            header('Location: admin_panel.php');
        } else {
            header('Location: board_resources.php');
        }
        exit();
    } else {
        echo "Invalid username. Please try again.";
    }
} else {
    echo "Username not provided.";
}
?>
