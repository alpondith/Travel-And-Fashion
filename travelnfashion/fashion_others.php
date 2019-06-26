<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("z_head.php") ?>
    <title>Other's Home</title>
</head>


<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <a href="fashion_others.php">
                    <p class="card-title big-font">Other Fashion</p>
                </a>
            </div>

        </div>
    </div>

    <?php if (isset($_GET["call_ornament"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'LADY_ORNAMENT' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_watch"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'WATCH' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_cap"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'CAP_HAT' ;");
        include("retrive_formate_public.php");

    } elseif (isset($_GET["call_lady_handbag"])) {

        include("config.php");
        $sql = ("select  id , name , price , type , size , sold_status , stock_status , description , image from product where type = 'LADY_HANDBAG' ;");
        include("retrive_formate_public.php");

    } else {
        ?>


        <div class="row">
            <div class="col-tab-6">

                <div class="card">
                    <form method="get" action="fashion_others.php">
                        <button type="submit" name="call_ornament">
                            <p class="card-title big-font">Ladies Ornaments</p>
                            <!-- Image -->
                            <img src="image/fashion/others/ornament.jpg" alt="Photo">
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
                    <form method="get" action="fashion_others.php">
                        <button type="submit" name="call_watch">
                            <p class="card-title big-font">Watches</p>
                            <!-- Image -->
                            <img src="image/fashion/others/watche.jpg" alt="Photo">
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
                    <form method="get" action="fashion_others.php">
                        <button type="submit" name="call_cap">
                            <p class="card-title big-font">Cap and Hats</p>
                            <!-- Image -->
                            <img src="image/fashion/others/cap.jpg" alt="Photo">
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
                    <form method="get" action="fashion_others.php">
                        <button type="submit" name="call_lady_handbag">
                            <p class="card-title big-font">Lady Handbag</p>
                            <!-- Image -->
                            <img src="image/fashion/others/handbag.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>choose...</p>
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