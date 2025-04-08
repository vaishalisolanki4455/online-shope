<?php
include "connection.php";
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$discount_price = $_POST['discount_price'];
$stock = $_POST['stock'];
$category_id = $_POST['category_id'];
$stock_limit = $_POST['stock_limit'];
$image = $_FILES['image'];

$image_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

$uploads = 'uploads/image/';

if (!is_dir($uploads)) {
    mkdir($uploads, 0777, true);
}

$image = $uploads . basename($image_name);
// echo $image;
// exit;
$status = $_POST['status'];
// print_r($_POST);
// exit;
$sql = "UPDATE product SET product_name = '$product_name',description = '$description', price = '$price',size = '$size',quantity = '$quantity',discount_price = '$discount_price',stock = '$stock', category_id = '$category_id', stock_limit = '$stock_limit',image = '$image',status = '$status' WHERE id='$id' ";
$query = mysqli_query($conn,$sql);
if($query){
    echo "0";
}else{
    echo "1";


}
?>