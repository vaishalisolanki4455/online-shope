<?php
include "connection.php";
session_start();

$product_id = $_POST['product_id'];
$id = $_SESSION['id'] ?? ''; // Check if session ID exists, otherwise assign an empty string

$quantity = "1";

// Check if the user is logged in (session ID exists and is not empty)
if (!empty($id)) {
    $query = "INSERT INTO cart (product_id, user_id, quantity) VALUES ('$product_id', '$id', '$quantity')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '0'; // Success response
    } else {
        echo '1'; // Failure response
    }
} else {
    // Show alert and redirect if user is not logged in
    echo "<script>
        alert('Please log in to add items to the cart.');
        window.location.href = 'login.php';
    </script>";
}
?>
