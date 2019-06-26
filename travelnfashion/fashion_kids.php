<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("z_head.php") ?>
    <title>Kid's Home</title>
</head>


<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <a href="fashion_kids.php">
                    <p class="card-title big-font">Kid's Fashion</p>
                </a>
            </div>

        </div>
    </div>

    <?php if (isset($_GET["call_boy"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'BABY_BOY' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_girl"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'BABY_GIRL' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_toy"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'TOY' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_shoes"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'KID_SHOE' ;");
        include("retrive_formate_public.php");

    } else {
        ?>


        <div class="row">
            <div class="col-tab-6">

                <div class="card">
                    <form method="get" action="fashion_kids.php">
                        <button type="submit" name="call_boy">
                            <p class="card-title big-font">Baby boy</p>
                            <!-- Image -->
                            <img src="image/fashion/kid/boy.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>click to watch all</p>
                            </div>
                        </button>
                    </form>
                </div>

            </div>

            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="fashion_kids.php">
                        <button type="submit" name="call_girl">
                            <p class="card-title big-font">Baby Girl</p>
                            <!-- Image -->
                            <img src="image/fashion/kid/girls.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>let's choose yours...</p>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="fashion_kids.php">
                        <button type="submit" name="call_toy">
                            <p class="card-title big-font">Toy</p>
                            <!-- Image -->
                            <img src="image/fashion/kid/toys.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>choose your item...</p>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="fashion_kids.php">
                        <button type="submit" name="call_shoes">
                            <p class="card-title big-font">Shoes</p>
                            <!-- Image -->
                            <img src="image/fashion/kid/kidShoe.png" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>your shoes...</p>
                            </div>
                        </button>
                    </form>
                </div>

            </div>

        </div>

        <?php
    }
    ?>


</div>

<?php include("footer.php"); ?>

</body>
<?php include("z_linker_endbody.php") ?>


</html>