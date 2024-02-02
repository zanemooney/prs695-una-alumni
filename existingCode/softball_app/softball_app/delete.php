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
        Enter the ID of the game to delete.
        <form action="do_delete.php" method="post" 
              onSubmit="if(confirm('Are you sure?')) return true; return false;">
            ID: <input type="text" name="id" />
            <input type="submit" />
        </form>
    </body>
</html>
