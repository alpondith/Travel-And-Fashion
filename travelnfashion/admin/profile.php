<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("z_head.php") ?>
    <title>welcome admin</title>
    <style>

    </style>
</head>

<body>

<div>
    <?php include("navbar.php") ?>
</div>

<div class="content-body">
    <div class="row">
        <div class="col-tab-5 col-lg-3">

            <div class="row">
                <div class="card" style="margin: 0px">
                    <button class="accordion">Welcome : <i><?php echo $login_session; ?></i></button>
                    <div class="panel">

                        <div class="row">
                            <a href="profile.php">
                                <button class="button">Refresh</button>
                            </a>
                        </div>

                        <div class="row">
                            <a href="logout.php">
                                <button class="button">Log Out</button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Insert product</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post" enctype="multipart/form-data">

                                <label>Product type: </label>
                                <select name="p_type">
                                    <option value="panjabi">Panjabi</option>
                                    <option value="shirt">Shirt</option>
                                    <option value="pant">Pant</option>
                                    <option value="men_shoe">Men shoe</option>

                                    <option value="shari">Shari</option>
                                    <option value="salwar">Salwar</option>
                                    <option value="hijab">Hijab-borkha</option>
                                    <option value="lady_shoe">Lady shoe</option>

                                    <option value="baby_boy">Baby boy</option>
                                    <option value="baby_girl">Baby girl</option>
                                    <option value="toy">toy</option>
                                    <option value="kid_shoe">Kid shoe</option>

                                    <option value="lady_ornament">Lady-Ornament</option>
                                    <option value="watch">watch</option>
                                    <option value="cap_hat">Cap-Hat</option>
                                    <option value="lady_handbag">Lady-handbag</option>
                                </select>
                                <br/><br/>

                                <label>image input:</label><br/>
                                <input name="fileToUpload" type="file"><br/><br/>

                                <label>ID:</label><br/>
                                <input name="p_id" type="text" placeholder="give product id"><br/>


                                <label>Product Name:</label><br/>
                                <input name="p_name" placeholder="product name" type="text"><br/>

                                <label>Product size: </label><br/>
                                <input name="p_size" type="text" placeholder="give product size"><br/>

                                <label>Price:</label><br/>
                                <input name="p_price" placeholder=" give price" type="number"><br/>

                                <label>Sold status</label><br/>
                                <input name="p_sold" placeholder="amount of product sold" type="number"><br/>

                                <label>Stock status</label><br/>
                                <input name="p_stock" placeholder="amount of product remain" type="number"><br/>

                                <label>Description</label><br/>
                                <textarea name="p_description" rows="6" cols="22"
                                          placeholder="write product description. people will watch it."></textarea><br/>

                                <label>Admin Stored information</label><br/>
                                <textarea name="p_admin_store" rows="6" cols="22"
                                          placeholder="Only admin will be able to see this information of this product."></textarea>

                                <br/><br/>
                                <input name="product_submit" type="submit" value=" Insert product ">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Update Product</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post">
                                <label>Product ID:</label><br/>
                                <input name="p_id" type="text" placeholder="give product id"><br/><br/>

                                <label>Update field: </label>
                                <select name="up_field">
                                    <option value="id">id</option>
                                    <option value="name">name</option>
                                    <option value="type">type</option>
                                    <option value="price">price</option>
                                    <option value="size">size</option>
                                    <option value="sold_status">sold_status</option>
                                    <option value="stock_status">stock_status</option>
                                    <option value="description">Description</option>
                                    <option value="admin_storage">admin_storage</option>
                                </select>
                                <br/><br/>
                                <label>New value:</label><br/>
                                <input type="text" name="new_value" placeholder="give new value.">

                                <br/><br/>
                                <input name="update_product" type="submit" value="update product">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Delete Product</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post">
                                <label>ID:</label><br/>
                                <input name="p_id" type="text" placeholder="give product id">

                                <br/>
                                <input name="product_delete" type="submit" value="Delete product">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card" style="margin: 0px;">
                    <button class="accordion">Watch products</button>

                    <div class="panel">
                        <div class="card-body">

                            <form action="profile.php" method="post">
                                <br/>
                                <input name="pw_all" type="submit" value="watch all product">
                            </form><br/>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>By product ID:</label><br/>
                                <input name="watch_id" type="text" placeholder="give product id">

                                <br/>
                                <input name="pw_id" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>By product Type:</label><br/>
                                <select name="watch_type">
                                    <option value="panjabi">Panjabi</option>
                                    <option value="shirt">Shirt</option>
                                    <option value="pant">Pant</option>
                                    <option value="men_shoe">Men shoe</option>

                                    <option value="shari">Shari</option>
                                    <option value="salwar">Salwar</option>
                                    <option value="hijab">Hijab-borkha</option>
                                    <option value="lady_shoe">Lady shoe</option>

                                    <option value="baby_boy">Baby boy</option>
                                    <option value="baby_girl">Baby girl</option>
                                    <option value="toy">toy</option>
                                    <option value="kid_shoe">Kid shoe</option>

                                    <option value="lady_ornament">Lady-Ornament</option>
                                    <option value="watch">watch</option>
                                    <option value="cap_hat">Cap-Hat</option>
                                    <option value="lady_handbag">Lady-handbag</option>
                                </select>

                                <br/>
                                <input name="pw_type" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>Search:</label><br/>
                                <input name="search_key" type="text" placeholder="any word...">

                                <br/>
                                <input name="pw_search" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Insert Place</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post" enctype="multipart/form-data">

                                <label>Place type: </label>
                                <select name="t_region">

                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="asia">Asia</option>
                                    <option value="europe">Europe </option>
                                    <option value="world">World</option>

                                </select>
                                <br/><br/>

                                <label>image input:</label><br/>
                                <input name="fileToUpload" type="file"><br/><br/>

                                <label>ID:</label><br/>
                                <input name="t_id" type="text" placeholder="give place id"><br/>


                                <label>Place Name:</label><br/>
                                <input name="t_name" placeholder="Place name" type="text"><br/>



                                <label>Description</label><br/>
                                <textarea name="t_description" rows="6" cols="22"
                                          placeholder="write product description. people will watch it."></textarea><br/>

                                <br/><br/>
                                <input name="t_submit" type="submit" value=" Insert Place ">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Update Place</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post">
                                <label>Place ID: </label><br/>
                                <input name="t_id" type="text" placeholder="give place id"><br/><br/>

                                <label>Update field: </label>
                                <select name="up_field">

                                    <option value="id">id</option>
                                    <option value="name">Name</option>
                                    <option value="region">Region</option>
                                    <option value="description">description</option>

                                </select>
                                <br/><br/>
                                <label>New value:</label><br/>
                                <input type="text" name="new_value" placeholder="give new value.">

                                <br/><br/>
                                <input name="update_place" type="submit" value="update place">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card" style="margin: 0px">

                    <button class="accordion">Delete Place</button>
                    <div class="panel">
                        <div class="card-body">
                            <form action="profile.php" method="post">
                                <label>ID:</label><br/>
                                <input name="t_id" type="text" placeholder="give place id">

                                <br/>
                                <input name="place_delete" type="submit" value="Delete place">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card" style="margin: 0px;">
                    <button class="accordion">Watch places</button>

                    <div class="panel">
                        <div class="card-body">

                            <form action="profile.php" method="post">
                                <br/>
                                <input name="tw_all" type="submit" value="watch all Places">
                            </form><br/><br/>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>By Place ID:</label><br/>
                                <input name="watch_id" type="text" placeholder="give product id">

                                <br/>
                                <input name="tw_id" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>By Region:</label><br/>
                                <select name="watch_region">
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="asia">Asia</option>
                                    <option value="europe">Europe</option>
                                    <option value="world">World</option>

                                </select>

                                <br/>
                                <input name="tw_region" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                            <label>OR</label><br/><br/>

                            <form action="profile.php" method="post">
                                <label>Search:</label><br/>
                                <input name="search_key" type="text" placeholder="any word...">

                                <br/>
                                <input name="tw_search" type="submit" value="watch now">
                                <input type="reset" value=" reset "><br/><br/>
                            </form>

                        </div>


                    </div>
                </div>
            </div>



        </div>

        <div class="col-tab-7 col-lg-9">
            <div class="row">


                <?php

                if (isset($_POST["product_submit"])) {

                    include("insert.php");
                }


                if (isset($_POST["update_product"])) {
                    include("update.php");
                }


                if (isset($_POST["product_delete"])) {
                    include("delete.php");
                }

                if (isset($_POST["pw_all"])){
                    include ("../config.php");
                    $sql =("select * from product;");
                    include("retrive_formate.php");
                }

                if (isset($_POST["pw_id"])) {
                    include("../config.php");
                    $watch_id = strtoupper($_POST["watch_id"]);
                    $sql = ("select * from product where id LIKE '%$watch_id%';");
                    include("retrive_formate.php");
                }

                if (isset($_POST["pw_type"])) {


                    include("../config.php");
                    $type = strtoupper($_POST["watch_type"]);
                    $sql = ("select * from product where type = '$type' ;");
                    include("retrive_formate.php");

                }

                if (isset($_POST["pw_search"])) {
                    include("../config.php");
                    $key = strtolower($_POST["search_key"]);
                    $sql = ("select  * from product 
                            where (
                            lower(id) LIKE '%$key%'
                            OR lower(name) LIKE '%$key%'
                            OR lower(type) LIKE '%$key%'
                            OR lower(price) LIKE '%$key%'
                            OR lower(size) LIKE '%$key%'
                            OR lower(sold_status) LIKE '%$key%'
                            OR lower(stock_status) LIKE '%$key%'
                            OR lower(description) LIKE '%$key%'
                            OR lower(admin_storage) LIKE '%$key%'
                            );");

                    include("retrive_formate.php");
                }



                if (isset($_POST["t_submit"])) {

                    include("place_insert.php");
                }

                if (isset($_POST["update_place"])){

                    include ("place_update.php");
                }

                if (isset($_POST["place_delete"]))
                {
                    include ("place_delete.php");
                }

                if (isset($_POST["tw_all"])){
                    include ("../config.php");
                    $sql =("select * from travel;");
                    include("retrive_formate_travel.php");
                }


                if (isset($_POST["tw_id"])) {
                    include("../config.php");
                    $watch_id = strtoupper($_POST["watch_id"]);
                    $sql = ("select * from travel where id LIKE '%$watch_id%';");
                    include("retrive_formate_travel.php");
                }

                if (isset($_POST["tw_region"])) {


                    include("../config.php");
                    $region = strtoupper($_POST["watch_region"]);
                    $sql = ("select * from travel where region = '$region' ;");
                    include("retrive_formate_travel.php");

                }

                if (isset($_POST["tw_search"])) {
                    include("../config.php");
                    $key = strtolower($_POST["search_key"]);
                    $sql = ("select  * from travel 
                            where (
                               lower(id) LIKE '%$key%'
                            OR lower(name) LIKE '%$key%'
                            OR lower(region) LIKE '%$key%'
                            OR lower(description) LIKE '%$key%'
                            );");

                    include("retrive_formate_travel.php");
                }

                ?>

            </div>
        </div>

    </div>

</div>

</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }

</script>
<?php include('../z_linker_endbody.php') ?>


</html>