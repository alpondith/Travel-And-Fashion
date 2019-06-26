<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("z_head.php") ?>
    <title>Ladies Home</title>
</head>


<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-12">

                <div class="card">
                    <a href="fashion_ladies.php">
                    <p class="card-title big-font">Ladies Fashion</p>
                    </a>
                </div>

        </div>
    </div>

    <?php if (isset($_GET["call_shari"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'SHARI' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_salwar"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'SALWAR' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_hijab"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'HIJAB' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_shoes"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'LADY_SHOE' ;");
        include("retrive_formate_public.php");

    }
    else {
        ?>


        <div class="row">
            <div class="col-tab-6">

                <div class="card">
                    <form method="get" action="fashion_ladies.php">
                        <button type="submit" name="call_shari">
                            <p class="card-title big-font">Shari</p>
                            <!-- Image -->
                            <img src="image/fashion/ladies/shari.png" alt="Photo">
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
                    <form method="get" action="fashion_ladies.php">
                        <button type="submit" name="call_salwar">
                            <p class="card-title big-font">Salwar</p>
                            <!-- Image -->
                            <img src="image/fashion/ladies/salwars.jpg" alt="Photo">
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
                    <form method="get" action="fashion_ladies.php">
                        <button type="submit" name="call_hijab">
                            <p class="card-title big-font">Hijab and Borka</p>
                            <!-- Image -->
                            <img src="image/fashion/ladies/hijab.jpg" alt="Photo">
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
                    <form method="get" action="fashion_ladies.php">
                        <button type="submit" name="call_shoes">
                            <p class="card-title big-font">Shoes</p>
                            <!-- Image -->
                            <img src="image/fashion/ladies/ladyShoes.jpg" alt="Photo">
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

<?php  include ("footer.php"); ?>

</body>
<?php include("z_linker_endbody.php") ?>

</html>