<?php

include ("../mobile_number.php");
$contact_info = ". To get this product call us here: ".$mobile;


$result = mysqli_query($product_con, $sql);

if(mysqli_num_rows($result)<1)
{
    echo "<div class='card'>";
    echo "<div class='card-body'> Sorry we don't have any product type like this. Thanks</div></div>";

}

while ($row = mysqli_fetch_array($result)) {
    echo "<div class='col-lg-6'>";
    echo "<div class='card' STYLE='margin: 10px;'>";
    echo "<div class='card-title'>" . $row['name'] . "</div>";
    echo "<div class='card-title'>(ID: " . $row['id'] . ") (Price: " . $row['price'] . " BDT)</div>";
    echo "<img src='../image/uploaded/" . $row['image'] . "' alt='photo of product'>";
    echo "<div class='card-info'><b>Details: </b>ID: " . $row['id'] . ". Name of the product is " . $row['name'] . ". Price is " . $row['price'] . " BDT. Item type is " . $row['type'] . " and size " . $row['size'] . ". We have sold this product " . $row['sold_status'] . " pieces and remains " . $row['stock_status'] . " pieces in stock. " . $row['description'] .$contact_info. "</div>";
    echo "<div class='card-info'><b>Admin secret information: </b>" . $row['admin_storage'] . "</div>";
    echo "</div>";
    echo "</div>";
}

mysqli_close($product_con);


?>