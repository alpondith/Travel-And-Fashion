<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("z_head.php") ?>
    <title>Gent's Home</title>
</head>


<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <a href="fashion_gents.php">
                    <p class="card-title big-font">Gent's Fashion</p>
                </a>
            </div>
        </div>
    </div>

    <?php if (isset($_GET["call_panjabi"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'PANJABI' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_shirt"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'SHIRT' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_pant"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'PANT' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_shoes"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'MEN_SHOE' ;");
        include("retrive_formate_public.php");

    } else {
        ?>


        <div class="row">
            <div class="col-tab-6">

                <div class="card">
                    <form method="get" action="fashion_gents.php">
                        <button type="submit" name="call_panjabi">
                            <p class="card-title big-font">Panjabi </p>
                            <!-- Image -->
                            <img src="image/fashion/men/panjabi.jpg" alt="Photo">
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
                    <form method="get" action="fashion_gents.php">
                        <button type="submit" name="call_shirt">
                            <p class="card-title big-font">Shirts</p>
                            <!-- Image -->
                            <img src="image/fashion/men/shirt.jpg" alt="Photo">
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
                    <form method="get" action="fashion_gents.php">
                        <button type="submit" name="call_pant">
                            <p class="card-title big-font">Pants</p>
                            <!-- Image -->
                            <img src="image/fashion/men/pants.jpg" alt="Photo">
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
                    <form method="get" action="fashion_gents.php">
                        <button type="submit" name="call_shoes">
                            <p class="card-title big-font">Shoes</p>
                            <!-- Image -->
                            <img src="image/fashion/men/shoes.jpg" alt="Photo">
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