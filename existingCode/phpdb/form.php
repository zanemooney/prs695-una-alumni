<?php
session_start();

//Displaying Products
function products() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stock";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<b>Title: </b>" . $row["title"] . "<br>"
            . "<b>Price: </b>" . $row["price"] . "<br>"
            . "<a href='delete.php?id=" . $row["id"] . "'> <input type='submit' value='Delete Item'/> </a> <br><br>";
        }
    } else {
        echo "0 results";
    }


    $conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PhpDb</title>
    </head>
    <body>
        <h1>Hello <?= $_SESSION["username"]; ?></h1>
        <h2>Products</h2>
<?= products(); ?>

        <form method="post" action="newItem.php">
            <h3>Add New Item</h3>
            Title: <input type="text" name="newTitle">
            <br>
            Price: <input type="text" name="newPrice">
            <br>
            <input type="submit">
        </form>


    </body>
</html>