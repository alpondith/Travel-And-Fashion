<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        include ('connectdb.php');

// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);



// SQL query to fetch information of registerd users and finds user match.
        $sql= ("select * from login where password= SHA('$password') AND username='$username'");
        $query = mysqli_query($connection ,$sql );
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            //header("location: profile.php"); // Redirecting To Other Page
            echo "<script>open('profile.php','_self')</script>";
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>