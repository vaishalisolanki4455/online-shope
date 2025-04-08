<?php
include "connection.php";
session_start();
$user_id = $_SESSION['id'];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$date = $_POST["date"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$checkmethod = $_POST["checkmethod"];
$total = $_POST["total"];   

// print_r(/$checkmethod);
// exit();

$sql = "INSERT INTO checkout(fname, lname,date, contact, address, city, country, checkmethod,user_id,total) 
        VALUES('$fname', '$lname','$date','$contact', '$address', '$city', '$country', '$checkmethod','$user_id','$total')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo 0;
} else {
    echo "1";
}
?>
 