<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("crud", $con);

        $result = mysql_query("SELECT * FROM Person where name = '" . $_REQUEST['firstname'] . "'");

        $row = mysql_fetch_array($result);

        if ($row) {
            ?>
            <form name="f" action="do_update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                <label ><?php echo $row['name']; ?></label><br/>
                DOB: <input type="text" name="dob" value="<?php echo $row['name']; ?>"><br/>
                <br/>
                <input type="submit" value="Update">
            </form>

            <?php
        } else {
            echo "There is no person by that name in the database.";
            echo"<a href='index.php'>Menu</a>";
        }

        mysql_close($con);
        ?>
    </body>
</html>
