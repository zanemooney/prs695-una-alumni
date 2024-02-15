<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        // Make sure that code below does not execute when we redirect.
        exit;
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "softball";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $sql = "DELETE FROM games WHERE id='$_POST[id]'";
            // TODO: execute the $sql above and display (right here using echo)
            // either "Record deleted successfully" or
            // "Error deleting record: " . $conn->error;

            $conn->close();
        ?>
        <a href="index.php">Main menu</a>
    </body>
</html>
