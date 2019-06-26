<?php


echo "<div class='col-tab-12'>";
echo "<div class='card'>";
echo "<div class='card-body'>";
$pl_id = strtoupper($_POST["t_id"]);
include("../config.php");
$sql = ("select id, image from travel where id = '$pl_id';");
$result = mysqli_query($product_con, $sql);
$row = mysqli_fetch_array($result);
$file_to_delete = '../image/uploaded_place/' . $row['image'];
if ($row['image'] == !null && unlink($file_to_delete)) {
    echo "Successfully deleted product picture ";
    $sql = ("delete from travel WHERE id = '$pl_id';");
    $result = mysqli_query($product_con, $sql);
    if ($result) {
        echo "and all information of the product ID: " . $pl_id;
    } else {
        echo "faild to delete all information.";
    }
} else {
    echo "failed to delete product. Resubmit with proper ID.";
}
echo "</div>";
echo "</div>";
echo "</div>";

mysqli_close($product_con);


?>