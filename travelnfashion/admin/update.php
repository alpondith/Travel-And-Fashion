<?php

$pro_id = strtoupper($_POST['p_id']);
$pro_field = $_POST['up_field'];
$pro_new = $_POST['new_value'];
include('../config.php');
if ($pro_field == 'type') {
    $type_store = array("panjabi","shirt","pant","men_shoe","shari","salwar","hijab","lady_shoe","baby_boy","baby_girl","toy","kid_shoe","cap_hat","lady_handbag");
    echo "<div class='card'>";
    echo "<div class='card-title'>";
    for ($i=0; $i < count($type_store) ; $i++)
    {
        if(strtoupper($type_store[$i])==strtoupper($pro_new))
        {
            $value = "typeMatched";
            break;
        }
        else
        {
            $value= "hurr";
        }
    }
    if ( $value == 'typeMatched') {
        $pro_new= strtoupper($pro_new);
        $sql = ("update product set $pro_field = '$pro_new' WHERE id = '$pro_id';");
        $result = mysqli_query($product_con, $sql);

        if (mysqli_affected_rows($product_con) > 0) {
            echo "update successful.";
        } else {
            echo "update unsuccessful. something is wrong";
        }
    } else {
        echo "type didn't match. please check spelling";
    }
    echo "</div></div>";
}
else {
    if($pro_field=='id' || $pro_field=='size')
    {
        $pro_new = strtoupper($pro_new);
        $pro_id = strtoupper($pro_id);
    }

    if (($pro_field == 'price' || $pro_field == 'sold_status' || $pro_field == 'stock_status') && is_double($pro_new)) {
        $sql = ("update product set $pro_field = $pro_new WHERE id = '$pro_id';");
    } else {
        $sql = ("update product set $pro_field = '$pro_new' WHERE id = '$pro_id';");
    }
    $result = mysqli_query($product_con, $sql);

    echo "<div class='card'>";
    echo "<div class='card-title'>";

    if (mysqli_affected_rows($product_con) > 0) {
        echo "update successful.";
        if($pro_field == 'id') {
            $pro_id = $pro_new;
        }
    } else {
        echo "update unsuccessful. something is wrong";
    }
    echo "</div></div>";
}

$sql = ("select * from product WHERE id = '$pro_id';");
include ("retrive_formate.php");







?>