<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("z_head.php") ?>
    <title>Travel Home</title>

</head>


<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">

    <div class="col-12">

        <div class="card">
            <a href="travel_home.php">
                <p class="card-title big-font">Travelling Places</p>
            </a>
        </div>

    </div>

    <?php
    if (isset($_GET["call_bangladesh"])) {

        include("config.php");
        $sql = ("select * from travel where  region = 'BANGLADESH';");
        include("retrive_format_travel_public.php");

    } elseif (isset($_GET["call_asia"])) {

        include("config.php");
        $sql = ("select * from travel where  region = 'ASIA';");
        include("retrive_format_travel_public.php");

    } elseif (isset($_GET["call_europe"])) {

        include("config.php");
        $sql = ("select * from travel where  region = 'EUROPE';");
        include("retrive_format_travel_public.php");

    } elseif (isset($_GET["call_world"])) {

        include("config.php");
        $sql = ("select * from travel where  region = 'WORLD';");
        include("retrive_format_travel_public.php");

    } else {
        ?>


        <div class="row">
            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="travel_home.php">
                        <button type="submit" name="call_bangladesh">
                            <p class="card-title big-font">Bangladesh's Best</p>
                            <!-- Image -->
                            <img src="image/travel/cox's_bazarr.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>Cox's Bazar of Bangladesh...</p>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-tab-6">
                <div class="card">

                    <form method="get" action="travel_home.php">
                        <button type="submit" name="call_asia">
                            <p class="card-title big-font">Asian's Best</p>

                            <!-- Image -->
                            <img src="image/travel/srilankaa.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>hill place of Sri Lanka...</p>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="travel_home.php">
                        <button type="submit" name="call_europe">
                            <p class="card-title big-font">Europe's Best</p>

                            <!-- Image -->
                            <img src="image/travel/montenegroo.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>montenegro...</p>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-tab-6">
                <div class="card">
                    <form method="get" action="travel_home.php">
                        <button type="submit" name="call_world">
                            <p class="card-title big-font">World's Best</p>

                            <!-- Image -->
                            <img src="image/travel/colosseum_romaa.jpg" alt="Photo">
                            <!-- Text Content -->
                            <div class="card-body">
                                <p>Colosseum of Roma...</p>
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