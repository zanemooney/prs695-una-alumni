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
