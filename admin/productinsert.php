<?php
include "connection.php";

$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$discount_price = $_POST['discount_price'];
$stock = $_POST['stock'];
$stock_limit = $_POST['stock_limit'];
$category_id = $_POST['category_id'];
$file = $_FILES['image'];


// print_r($category_id);
// exit(); 
$fileName = $file['name'];
$fileTmpPath = $file['tmp_name'];
$uploadDir = 'uploads/image/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$uploadFilePath = $uploadDir . basename($fileName);

if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {

    // echo "File uploaded successfully: " . $uploadFilePath;

    $imagePath = $uploadFilePath; // Path of the uploaded file

    $status = $_POST['status'];


$sql = "INSERT INTO product (product_name, description, price,size, quantity,discount_price, stock,stock_limit,category_id,image,status) VALUES('$product_name', '$description', '$price', '$size', '$quantity', '$discount_price', '$stock', '$stock_limit','$category_id','$imagePath','$status')";

$query = mysqli_query($conn, $sql);
if ($query) {
    echo '0';
} else {
    echo '1';
}}
?>
