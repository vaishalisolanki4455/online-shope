<?php
include "connection.php";

$cart_id = $_POST['cart_id'] ?? '';
$quantity = $_POST['quantity'] ?? '';



    $sql = "UPDATE cart SET quantity = '$quantity' WHERE id = '$cart_id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "0";
    }else{
        echo "1";
    }
?>
