<?php

$host = "localhost";    /* Host name */
$user = "travelnf_public";         /* User */
$password = "tnf7890tnf";         /* Password */
$dbname = "travelnf_datatnf";   /* Database name */

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$product_con = mysqli_connect($host, $user, $password);
// Check connection
if (!$product_con) {
    die("Connection failed: ".mysqli_connect_error());
}

// Selecting Database
$product_db = mysqli_select_db($product_con,$dbname);
// Check connection
if (!$product_db) {
    die("Database Connection failed: ".mysqli_connect_error());
}

?>