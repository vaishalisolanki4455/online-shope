<?php
include "connection.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
// $name = $_POST['name'];

$sql = "SELECT * FROM grocee WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['id']= $row['id'];
    $_SESSION['email']= $row['email'];
    $_SESSION['name']= $row['name'];
    // print_r($_SESSION);
    // exit();

    header('Location: index.php');
} else {
    echo "<script>
        alert('Invalid email or password');
        window.location.href='login.php';
    </script>";
}
?>
