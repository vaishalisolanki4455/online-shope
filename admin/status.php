<?php
include "connection.php";
$status = $_GET["status"];
$id = $_GET["id"];
// echo $status . $id;
$sql ="UPDATE slider SET status='$status' WHERE id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header("location:slidershow.php");
}
else{
    echo "error";
}

?>
