
<?php

include("connectdb.php");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$sql = ("select username from login where username='$user_check'");
$ses_sql = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if (!isset($login_session)) {
    mysqli_close($connection); // Closing Connection
   // header('Location: index.php'); // Redirecting To Home Page
    echo "<script>open('index.php','_self')</script>";
}
?>