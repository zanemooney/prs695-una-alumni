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
        // TODO: create a SQL select statement to read EVERYTHING
        // from the games table, sorted by the id column
        // (i.e., replace the empty string with the query string)
        $sql = "SELECT * from games";
        $result = $conn->query($sql);

        echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>Opponent</th>
                <th>Site</th>
                <th>Result</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['opponent'] . "</td>";
            echo "<td>" . $row['site'] . "</td>";
            echo "<td>" . $row['result'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        $conn->close();
        ?>
    </body>
</html>
