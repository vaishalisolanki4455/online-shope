<?php
include "connection.php";

$id = $_POST['id'];

$sql = "DELETE FROM deals WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if($query){

    header("location:deals.php");
}
else{
    echo "error";
}
?>