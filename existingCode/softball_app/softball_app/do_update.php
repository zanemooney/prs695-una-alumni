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
