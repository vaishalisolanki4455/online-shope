<?php
include "connection.php";

$id = $_POST['id'];

$sql = "DELETE FROM category WHERE id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header("location:category.php");
}
else{
    echo "error";
}

?>