# Zane Mooney's PRS695 Capstone Project

I extend a warm welcome to Zane Mooney's pioneering Capstone Project developed for the Office of Alumni Relations at the University of North Alabama. This project, meticulously crafted for the esteemed Board of Trustees (BOT) of the National Alumni Association, introduces an innovative and secure login system, poised to redefine their digital experience significantly.

## Project Components

The project will consist of a login screen (login.html) for the Board of Trustees (BOT) for the National Alumni Association (NAA). There will be a prompt asking for a username and a login button, along with the other typical things standard UNA webpages have. Once the user presses the "Login" button, it will go fire into "login.php" 

### Login Screen (login.html)

### Authentication Magic

```php
<?php
  if($_POST["password"] == "1830")
  {
    include("board-members-only/board-resources.html");
  }
  else
  {
?>
The password is incorrect. Please contact Amy Bishop at abishop3@una.edu for help.
<?php
  }
?>
```

#### Vision for Authentication (Two Choices)

<h4>Option 1 | task size = S</h4>

<p>We stick to the current system we have, however, we (at least) add some basic form of encryption so that the password is not easily accessible (extra brownie points)</p>

Simple code like:
```php
<?php
  pass = sha256("1830")
```
Thanks, Cumbie for the reminder!

<h4>Option 2 | task size = L</h4>
<p>We make an entire CRUD database using very basic php, sql, and html.
**Functionality (Scope):**
1. **Create** a new username (following a strict format: firstInitialfirstFourLettersOfLastName ex. zmoon)
2. **Read** existing usernames in "auth.php"

Existing Code that Zane has Done:
  
```php

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

```
  
3. Third item
4. Fourth item
</p>
