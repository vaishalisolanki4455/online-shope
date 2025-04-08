<?php 
include "connection.php";

$id = $_POST['id'];
 $sql = "DELETE FROM product WHERE id='$id'";
 $query = mysqli_query($conn,$sql);
 
 if($query){
    echo "0";
 }
 else{
    echo "1";
 }
?>