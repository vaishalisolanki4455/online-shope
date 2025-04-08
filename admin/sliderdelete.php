<?php
include "connection.php";

$id = $_POST['id'];

$sql = "DELETE FROM slider WHERE id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header("location:slider.php");
}
else{
    echo "error";
}

?>