<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

include "dbconfig.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$cellphone = $_REQUEST['cellphone'];

$check_username = mysqli_query($db, "SELECT username FROM users WHERE username = '$username' ");
if (mysqli_num_rows($check_username) > 0) {
    echo 'Email Already exists';
} else {


    $query = "INSERT INTO users (username, user_password, first_name, last_name, cellphone)
        VALUES ('$username', '$password', '$first_name', '$last_name', '$cellphone')";

    $_SESSION['username'] = $username;
    $_SESSION['first_name'] = $first_name;

    echo 'Bienvenido';
}

// Close connection
$db->close();
