<?php


$result = mysqli_query($product_con, $sql);

if(mysqli_num_rows($result)<1)
{
    echo "<div class='card'>";
    echo "<div class='card-body'> no place found. thanks</div></div>";

}

while ($row = mysqli_fetch_array($result)) {
    echo "<div class='col-lg-6'>";
    echo "<div class='card' STYLE='margin: 10px;'>";
    echo "<div class='card-title'>" . $row['name'] . "</div>";
    echo "<div class='card-title'> Region: " . $row['region'] ."  (ID: " . $row['id'] . " )</div>";
    echo "<img src='../image/uploaded_place/" . $row['image'] . "' alt='photo of product'>";
    echo "<div class='card-info'><b>Details: </b>".$row['description']."</div>";
    echo "</div>";
    echo "</div>";
}

mysqli_close($product_con);


?>