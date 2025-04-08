<?php
include "connection.php";

$id = $_POST['id'];

// $image = $_FILES['image'];

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

if (move_uploaded_file($temp_name, $image)) {
    $sql = "UPDATE slider SET image='$image',status='$status' WHERE id='$id'";

    // echo $sql;
    // exit;
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "0";
    } else {
        echo "1";
    }
}
?>