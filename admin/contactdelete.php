<?php
include "connection.php";

$id = $_POST["id"] ?? '';

if (!empty($id)) {
    $sql = "DELETE FROM contact WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "0";  // Success
    } else {
        echo "1";  // Failure
    }
} else {
    echo "1";  // No ID received
}
?>
