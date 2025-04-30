<?php

require "connection.php";

// Retrieve POST data
$username = $_POST["username"];
$email = $_POST["email_address"];
$phone = $_POST["phone_number"];
$password = $_POST["password"];
$confirmation = $_POST["confirmPassword"];

// Validation
if (empty($username)) {
    echo "Please enter your Username!";
} else if (strlen($username) > 50) {
    echo "Username must have less than 50 characters!";
} else if (empty($email)) {
    echo "Please enter your Email!";
} else if (strlen($email) >= 100) {
    echo "Email must have less than 100 characters!";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email!";
} else if (empty($phone)) {
    echo "Please enter your Phone Number!";
} else if (!preg_match('/^[0-9]{10}$/', $phone)) {
    echo "Phone Number must be 10 digits!";
} else if (empty($password)) {
    echo "Please enter your Password!";
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo "Password must be between 5 - 20 characters!";
} else if (empty($confirmation)) {
    echo "Please re-enter your Password!";
} else if ($password != $confirmation) {
    echo "Passwords do not match!";
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' OR `username`='" . $username . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo "User with the same Email or Username already exists.";
    } else {
        Database::iud("INSERT INTO `user` (`username`, `email`, `mobile`, `password`) VALUES ('" . $username . "', '" . $email . "', '" . $phone . "', '" . $password . "')");

        echo "success";
        session_start();
        $_SESSION["username"] = $username;
    }
}

?>