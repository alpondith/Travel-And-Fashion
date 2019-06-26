<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
   // header("location: profile.php");
    echo "<script>open('profile.php','_self')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php  include ("z_head.php") ?>
    <title>Login Admin</title>


</head>


<body>


<div>
    <?php include("navbar.php") ?>
</div>


<div class="content-body">

    <div class="row">
        <div class="card" style="max-width: 400px; margin: 50px auto ;">
            <h2 class="card-title">Login Form</h2>
            <form class="card-body" action="" method="post">
                <label>UserName :</label><br/>
                <input id="name" name="username" placeholder="username" type="text"><br/><br/>
                <label>Password :</label><br/>
                <input id="password" name="password" placeholder="write password" type="password"><br/><br/>
                <input name="submit" type="submit" value=" Login ">
                <input type="reset" value=" reset "><br/><br/>
                <span><?php echo $error; ?></span><br/><br/>
            </form>
        </div>
    </div>
</div>



</body>
<?php include('../z_linker_endbody.php') ?>

</html>