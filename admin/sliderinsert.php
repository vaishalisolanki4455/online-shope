<?php
include "connection.php";
$file = $_FILES['image'];
$status = $_POST['status'];
// print_r($_POST);
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


    // SQL query to insert data
    $query = "INSERT INTO slider(image,status)VALUES('$imagePath','$status')";
    $result = mysqli_query($conn, $query);
    // echo($query);
    // exit;

    // Execute the query
    if ($result) {
        echo '0';
    } else {
        echo "1";
    }
}
?>