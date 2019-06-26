<!DOCTYPE html>
<html lang="en">
<head>


    <title>home</title>
    <?php include("z_linker_head.php") ?>


</head>


<body>


<div>
    <?php include("navbar.php"); ?>
</div>


<div class="content-body">

    <div class="parallax parallaxTab" STYLE="background-image:url(image/homepage/aa.jpg); background-position: top;">
        <div><p class="big-font font-position">Travel and Fashion</p></div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <a href="fashion_home.php">
                    <p class="card-title big-font">Fashion</p>
                </a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <a href="fashion_gents.php">
                    <p class="card-title big-font">Gents</p>

                    <!-- Image -->
                    <img src="image/fashion/men.jpg" alt="Photo">
                    <!-- Text Content -->
                    <div class="card-body">
                        <p>choose your dress...</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <a href="fashion_ladies.php">
                    <p class="card-title big-font">Ladies</p>

                    <!-- Image -->
                    <img src="image/fashion/lady.jpg" alt="Photo">
                    <!-- Text Content -->
                    <div class="card-body">
                        <p>let's choose yours...</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <a href="fashion_kids.php">
                    <p class="card-title big-font">Kids</p>

                    <!-- Image -->
                    <img src="image/fashion/kids.jpg" alt="Photo">
                    <!-- Text Content -->
                    <div class="card-body">
                        <p>hey kids...</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <a href="fashion_others.php">
                    <p class="card-title big-font">Others</p>

                    <!-- Image -->
                    <img src="image/fashion/watche.jpg" alt="Photo">
                    <!-- Text Content -->
                    <div class="card-body">
                        <p>Others...</p>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="parallax" STYLE="background-image:url(image/homepage/bb.jpg);">
        <div><p class="big-font font-position"></p></div>
    </div>


    <div class="col-12">
        <div class="card">
            <a href="travel_home.php">
                <p class="card-title big-font">Travelling Places</p>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
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

        <div class="col-md-6">
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

        <div class="col-md-6">
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

        <div class="col-md-6">
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


    <div class="parallax" STYLE="background-image:url(image/homepage/cc.jpg);">
        <div><p class="big-font font-position"></p></div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <p class="card-title big-font">We travel not to escape life,<br/>but for life not to escape us.</p>

            <p class="card-title">Match your Fashion and travel the best places.<br/>
                <i style="font-weight: 100 ;font-size: 20px">Call us here: <?php  include ("mobile_number.php"); echo $mobile; ?> </i></p>

        </div>
    </div>
</div>


</body>
<?php include("z_linker_endbody.php") ?>

</html>