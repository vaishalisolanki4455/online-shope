<?php
include "connection.php";
$id = $_POST['id'];
$blog = $_POST['blog'];
$description = $_POST['description'];
// $file = $_FILES['image'];
$status = $_POST['status'];
// print_r($description);
// exit();


// print_r($_POST);
// exit(); 
$fileName = $_FILES['image']['name'];
$fileTmpPath = $_FILES['image']['tmp_name'];
// print_r($fileTmpPath);
// exit();
$uploadDir = 'uploads/image/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$uploadFilePath = $uploadDir . basename($fileName);

// echo $uploadFilePath;
// exit;


if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {

    // echo "File uploaded successfully: " . $uploadFilePath;

    $imagePath = $uploadFilePath; // Path of the uploaded file


    $sql = "UPDATE blog SET blog = '$blog',image='$imagePath',description='$description',status='$status' WHERE id='$id'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '0';
    }
} else {
    echo "1";
}
?>