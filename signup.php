<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "dbconfig.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$cellphone = $_REQUEST['cellphone'];




/*if ($db->query($query) === TRUE) {
    echo "Bienvenido";
} else {
    echo "Error: " . $query . "<br>" . $db->error;
} */

// Close connection
//$db->close();

$check_username = mysqli_query($db, "SELECT username FROM users WHERE username = '$username' ");
if (mysqli_num_rows($check_username) > 0) {
    echo 'Email Already exists';
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $query = "INSERT INTO users (username, user_password, first_name, last_name, cellphone)
        VALUES ('$username', '$password', '$first_name', '$last_name', '$cellphone')";

        echo ('Bienvenido');
    }
}
// Close connection
$db->close();
