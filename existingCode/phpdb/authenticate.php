<?php

session_start();

//Login Authentication
$password = $_POST["pwd"];

if ($password == "secret") {
    $_SESSION["username"] = $_POST["uname"];
    header('Location: form.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

