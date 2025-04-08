<?php
include "connection.php";

$id = $_POST['id'];

$sql = "DELETE FROM blog WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if($query){

    header("location:blog.php");
}
else{
    echo "error";
}
?>