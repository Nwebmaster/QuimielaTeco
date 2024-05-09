<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "dbconfig.php";

/*$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$cellphone = $_REQUEST['cellphone'];*/


$query = "INSERT INTO users VALUES (default, 'john')";
if ($db->query($query) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}

// Close connection
$db->close();
?>

//$query = "INSERT INTO users VALUES (DEFAULT, '$username', '$password', '$first_name', '$last_name', '$cellphone', DEFAULT)";