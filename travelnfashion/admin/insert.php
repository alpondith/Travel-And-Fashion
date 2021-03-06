<?php
echo "<div class='card'>";


include("../config.php");

$target_dir = "../image/uploaded/";

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$target_file = $target_dir . $newfilename;


$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $pro_type = strtoupper($_POST["p_type"]);
    $pro_size = strtoupper($_POST["p_size"]);
    $pro_filename = $newfilename;
    $pro_id = strtoupper($_POST["p_id"]) ;
    $pro_name = $_POST["p_name"];
    $pro_price = $_POST["p_price"];
    $pro_sold = $_POST["p_sold"];
    $pro_stock = $_POST["p_stock"];
    $pro_description = $_POST["p_description"];
    $pro_admin_store = $_POST["p_admin_store"];

    $sql = ("INSERT INTO product ( id , name ,type , price , size , sold_status , stock_status ,  description , admin_storage, image) VALUES ('$pro_id','$pro_name','$pro_type',$pro_price,'$pro_size',$pro_sold,$pro_stock,'$pro_description','$pro_admin_store','$pro_filename');");
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && mysqli_query($product_con, $sql)) {
        echo "<div class='card-title'>The product picture " . basename($_FILES["fileToUpload"]["name"]) . " and other information has been uploaded successfully.</div>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
echo "</div>";


$sql = ("select * from product WHERE id = '$pro_id';");
include("retrive_formate.php");




?>


