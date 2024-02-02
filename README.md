# Zane Mooney's PRS695 Capstone Project

I extend a warm welcome to Zane Mooney's pioneering Capstone Project developed for the Office of Alumni Relations at the University of North Alabama. This project, meticulously crafted for the esteemed Board of Trustees (BOT) of the National Alumni Association, introduces an innovative and secure login system, poised to redefine their digital experience significantly.

## Project Components

The project will consist of a login screen (login.html) for the Board of Trustees (BOT) for the National Alumni Association (NAA). There will be a prompt asking for a username and a login button, along with the other typical things standard UNA webpages have. Once the user presses the "Login" button, it will go fire into "login.php" 

### Login Screen (login.html)

### Authentication Magic
_**Existing code that is live build:**_
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

_**Existing code that Zane has done and can be edited to make fit this project:**_
```php
<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        // Make sure that code below does not execute when we redirect.
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="do_insert.php" method="post">
            Opponent: <input type="text" name="opponent"><br/>
            Site: <input type="text" name="site"><br/>
            Result: <input type="text" name="result"><br />
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
```

2. **Read** existing usernames in "auth.php"

_**Existing code that Zane has done and can be edited to make fit this project:**_
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
  
3. **UPDATE** existing usernames (incase of name change or a typo)


_**Existing code that Zane has done and can be edited to make fit this project:**_

```php
<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not execute when we redirect.
    exit;
}

// TODO: connect to the database

// TODO: initialize the variables used in $sql via the POST superglobal
$sql = "UPDATE games SET opponent='$opponent', site='$site', result='$result' WHERE id=" . $id;

// TODO: execute the query and if it works clear the error in the session
// (just to make sure)
// else

//TODO: set the error in the session to read "Error updating record: "
// and append the sql error message from the database


// TODO: close the db connection
header("location:index.php");
?>
```

5. **DELETE** users to ensure no unauthorized users may enter the Board of Trustee's page (to the best of our abilities).

_**Existing code that Zane has done and can be edited to make fit this project:**_
```php
<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not execute when we redirect.
    exit;
}

// TODO: connect to the database

// TODO: initialize the variables used in $sql via the POST superglobal
$sql = "UPDATE games SET opponent='$opponent', site='$site', result='$result' WHERE id=" . $id;

// TODO: execute the query and if it works clear the error in the session
// (just to make sure)
// else

//TODO: set the error in the session to read "Error updating record: "
// and append the sql error message from the database


// TODO: close the db connection
header("location:index.php");
?>
```
I will admit there is some work on 4, however, it is basic code that can be filled out.</p>



