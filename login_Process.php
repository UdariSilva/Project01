<?php
require "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username)) {
    echo "Please enter your Username!";
    exit;
} else if (empty($password)) {
    echo "Please enter your Password!";
    exit;
}

$rs = Database::search("SELECT * FROM `user` WHERE `username`='" . $username . "' AND `password`='" . $password . "'");
if ($rs->num_rows > 0) {
    session_start();
    $_SESSION["username"] = $username;

    echo "success";
} else {
    echo "Invalid username or password.";
}
?>