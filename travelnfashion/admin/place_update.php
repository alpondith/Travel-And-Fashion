<?php


$pl_id = strtoupper($_POST['t_id']);
$pl_field = $_POST['up_field'];
$pl_new = $_POST['new_value'];
include('../config.php');
if ($pl_field == 'region') {
    $type_store = array("bangladesh","asia","europe","world");
    echo "<div class='card'>";
    echo "<div class='card-title'>";
    for ($i=0; $i < count($type_store) ; $i++)
    {
        if(strtoupper($type_store[$i])==strtoupper($pl_new))
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
        $pl_new= strtoupper($pl_new);
        $sql = ("update travel set $pl_field = '$pl_new' WHERE id = '$pl_id';");
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

    if($pl_field=='id')
    {
        $pl_new = strtoupper($pl_new);
        $pl_id = strtoupper($pl_id);
    }

    $sql = ("update travel set $pl_field = '$pl_new' WHERE id = '$pl_id';");
    $result = mysqli_query($product_con, $sql);

    echo "<div class='card'>";
    echo "<div class='card-title'>";

    if (mysqli_affected_rows($product_con) > 0) {
        echo "update successful.";
        if($pl_field == 'id') {
            $pl_id = $pl_new;
        }
    } else {
        echo "update unsuccessful. something is wrong";
    }
    echo "</div></div>";
}

$sql = ("select * from travel WHERE id = '$pl_id';");
include ("retrive_formate_travel.php");





?>