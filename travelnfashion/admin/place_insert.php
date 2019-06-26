<?php
echo "<div class='card'>";


include("../config.php");

$target_dir = "../image/uploaded_place/";

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
    $pl_region = strtoupper($_POST["t_region"]);
    $pl_name = $_POST["t_name"];
    $pl_filename = $newfilename;
    $pl_id = strtoupper($_POST["t_id"]) ;
    $pl_desp = $_POST["t_description"];


    $sql = ("INSERT INTO travel ( id , name , region , description , image) VALUES ('$pl_id','$pl_name','$pl_region','$pl_desp','$pl_filename');");
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && mysqli_query($product_con, $sql)) {
        echo "<div class='card-title'>The Place picture " . basename($_FILES["fileToUpload"]["name"]) . " and other information has been uploaded successfully.</div>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
echo "</div>";


$sql = ("select * from travel WHERE id = '$pl_id';");
include("retrive_formate_travel.php");




?>


