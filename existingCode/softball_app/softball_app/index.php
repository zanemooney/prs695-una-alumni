<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>UNA Softball 2016 Database</h2>
        <?php
            if (isset($_SESSION['error'])) {
                echo "<em>" . $_SESSION['error'] . "</em>";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "Welcome, $username";
                include 'menu.html';
            } else {
        ?>
        <h3>Login</h3>
        <form action="authenticate.php" method="post">
            Username: <input type="text" name="enduser"><br>
            Password: <input type="password" name="userpass"><br>
            <input type="submit">
        </form>
        <p/>
        <?php
            }
        ?>
    </body>
</html>
