<?php

// Database configuration

const DB_HOST     = "localhost";

const DB_USERNAME = "root";

const DB_PASSWORD = "";

const DB_NAME     = "jornadas";

// Create database connection

$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection

if ($db->connect_error) {

    die("Connection failed: " . $db->connect_error);

}
else{

    echo "Connected successfully";

}


?>