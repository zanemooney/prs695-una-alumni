<?php
session_start();

// Check if user is authenticated as admin
if(!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: index.php');
    exit();
}

// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=alumni_database', 'username', 'password');

// Function to fetch all users from the database
function getAllUsers($pdo) {
    $stmt = $pdo->query('SELECT * FROM users');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to add a new user to the database
function addUser($pdo, $username, $role) {
    $stmt = $pdo->prepare('INSERT INTO users (username, role) VALUES (:username, :role)');
    $stmt->execute(['username' => $username, 'role' => $role]);
}

// Function to update an existing user in the database
function updateUser($pdo, $id, $username, $role) {
    $stmt = $pdo->prepare('UPDATE users SET username = :username, role = :role WHERE id = :id');
    $stmt->execute(['id' => $id, 'username' => $username, 'role' => $role]);
}

// Function to delete a user from the database
function deleteUser($pdo, $id) {
    $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
    $stmt->execute(['id' => $id]);
}

// Handle form submissions
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['add_user'])) {
        $username = $_POST['username'];
        $role = $_POST['role'];
        addUser($pdo, $username, $role);
    } elseif(isset($_POST['update_user'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        updateUser($pdo, $id, $username, $role);
    } elseif(isset($_POST['delete_user'])) {
        $id = $_POST['id'];
        deleteUser($pdo, $id);
    }
}

// Fetch all users
$users = getAllUsers($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome to Admin Panel</h2>

    <!-- Form to add a new user -->
    <h3>Add User</h3>
    <form action="scripts\do_insert.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="role">Role:</label>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="board_member">Board Member</option>
        </select>
        <input type="submit" name="add_user" value="Add User">
    </form>

    <!-- List of users with options to update and delete -->
    <h3>Manage Users</h3>
    <ul>
        <?php foreach($users as $user): ?>
            <li>
                <?php echo $user['username']; ?> - <?php echo $user['role']; ?>
                <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <input type="text" name="username" value="<?php echo $user['username']; ?>">
                    <select name="role">
                        <option value="admin" <?php if($user['role'] === 'admin') echo 'selected'; ?>>Admin</option>
                        <option value="board_member" <?php if($user['role'] === 'board_member') echo 'selected'; ?>>Board Member</option>
                    </select>
                    <input type="submit" name="update_user" value="Update">
                    <input type="submit" name="delete_user" value="Delete" onclick="return confirm('Are you sure you want to delete this user?')">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
