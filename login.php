<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include "dbconfig.php";
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Clean data to prevent SQL injection    
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($db, $query);

    if (!$select_user_query) {

        die("QUERY FAILED" . mysqli_error($db));
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_role = $row['user_role'];
    }

    if ($username !== $db_username && $password !== $db_user_password) {

        header("Location: ../index.php");
    } else if ($username == $db_username && $password == $db_user_password) {

        $_SESSION['username'] = $db_username;
        $_SESSION['first_name'] = $db_first_name;
        $_SESSION['user_role'] = $db_user_role;



        header("Location: ../QuimielaTeco/index.php");
    } else {
        header("Location: ../index.php");
    }
}
