<?php

$host = "localhost";    /* Host name */
$user = "travelnf_adminz";         /* User */
$password = "t12n34f56";         /* Password */
$dbname = "travelnf_admin";   /* Database name */

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($host, $user, $password);
// Check connection
if (!$connection) {
    die("Connection failed: ".mysqli_connect_error());
}

// Selecting Database
$db = mysqli_select_db($connection,$dbname);
// Check connection
if (!$db) {
    die("Database Connection failed: ".mysqli_connect_error());
}

?>