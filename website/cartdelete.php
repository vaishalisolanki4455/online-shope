<?php
include "connection.php";

$id = $_POST['id'];
// print_r($id);
// exit();
$sql = "DELETE FROM cart WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if ($query) {
    echo '0';
} else {
    echo "1";
}

?>