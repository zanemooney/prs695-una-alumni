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

        $result = mysql_query("select count(*) from person");
        
        $row = mysql_fetch_array($result);

        print_r($row);
        
        echo "If your server is running and you have created your database 
            correctly, you should see 16 rows here: $row[0] rows found.";

        mysql_close($con);
        ?>
        
        <h2>TO DO</h2>
        <ul>
            <li><a href="insert.php">Create</a></li>
            <li><a href="select.php">Read</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </body>
</html>
