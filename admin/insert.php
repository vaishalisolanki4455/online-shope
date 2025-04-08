<?php

include "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql="INSERT INTO form(name,email,password)
VALUES('$name','$email','$password') ";
$result=mysqli_query($conn,$sql);

if($result){
    header("location:login.php");
}
else{
    echo "error";
}
?>