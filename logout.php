<?php
session_start();

?>

<?php
$_SESSION['username'] = null;
$_SESSION['first_name'] = null;
$_SESSION['user_role'] = null;

header("Location: ../quimielaTeco/index.php");
?>