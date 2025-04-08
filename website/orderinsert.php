<?php
include "connection.php";
session_start();
$id = $_SESSION['id'];

$sql = "SELECT checkout.*, cart.product_id, cart.quantity
FROM checkout
LEFT JOIN cart ON checkout.user_id = cart.user_id 
WHERE checkout.user_id = '$id'";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Query failed: " . mysqli_error($conn));
}

$product_ids = [];  // Array to store multiple product IDs
$quantities = [];

while ($row = mysqli_fetch_assoc($query)) {
    $date = $row['date'];
    $contact = $row['contact'];
    $address = $row['address'];
    $city = $row['city'];
    $checkmethod = $row['checkmethod'];
    $total = $row['total'];
    
    
    // Store product IDs and quantities
    $product_ids[] = $row['product_id'];
    $quantities[] = $row['quantity'];
}

// Convert arrays to comma-separated strings
$srt = implode(",", $product_ids);
$qty_str = implode(",", $quantities);

$sql2 = "INSERT INTO `order` (user_id,date, contact, address, city, checkmethod, total, product_id, quantity) 
VALUES ('$id','$date', '$contact', '$address', '$city', '$checkmethod', '$total', '$srt', '$qty_str')";

$query2 = mysqli_query($conn, $sql2);

if (!$query2) {
    die("Error: " . mysqli_error($conn));
}

header('location: checkout-3.php');
?>