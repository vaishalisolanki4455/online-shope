<?php 
include "connection,php";
 $id = $_GET['id']?? '';
 $sql = "SELECT * FROM product WHERE id = '$id'";
 $query = mysqli_query($conn,$slq);
 if($row = mysqli_fetch_array($query))

?>