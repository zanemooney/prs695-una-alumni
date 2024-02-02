<?php
session_start();
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
            $sql = "SELECT * FROM games where id = '" . $_POST['id'] . "'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
        ?>
                    <form name="f" action="do_update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                        <label ><?php echo $row['id']; ?></label><br/>
                        Opponent: <input type="text" name="opponent" value="<?php echo $row['opponent']; ?>"><br/>
                        Site: <input type="text" name="site" value="<?php echo $row['site']; ?>"><br/>
                        Result: <input type="text" name="result" value="<?php echo $row['result']; ?>"><br/>
                        <br/>
                        <input type="submit" value="Update">
                    </form>
        <?php
                }
            } else {
                echo "There is no game with that ID in the database.";
                echo"<a href='index.php'>Menu</a>";
            }
            $conn->close();
        ?>
    </body>
</html>
