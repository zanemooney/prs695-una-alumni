<?php session_start();

// TODO: Validate (sanitize) the form data using the test_input function. [done]
// TODO: place the sanitized strings into $endUser and $endUserPassword [done]
// TODO: if the strings don't have at least one char, send the user
// back to the form (with an appropriate error message) 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $endUser = test_input($_POST["enduser"]);
  $endUserPassword = test_input($_POST["userpass"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softball";

// TODO: study this code; make sure that you understand it!
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '$endUser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $verified = password_verify( $endUserPassword, trim($row['password']));
        if ($verified) {
            $_SESSION['username'] = $endUser;
            $_SESSION['error'] = '';
        } else {
            $_SESSION['error'] = 'invalid username or password';
        }
    }
} else {
    $_SESSION['error'] = 'invalid username or password';
}
$conn->close();
header("location:index.php");
?>