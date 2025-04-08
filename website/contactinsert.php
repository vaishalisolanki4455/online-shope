<?php
include "connection.php";
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
// print_r($message);
// exit();


$sql = "INSERT INTO contact(f_name,l_name,phone,email,message) VALUE('$fname','$lname','$phone','$email','$message')";
$query = mysqli_query($conn,$sql);


$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'vaishalisolanki5555@gmail.com';
    $mail->Password = 'wzdl izis mijx fqai';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setfrom('vaishalisolanki55555@gmail.com', 'Mailer');
    $mail->addAddress('vaishalisolanki5555@gmail.com');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Grocee';
    $mail->Body = "Name: $fname $lname <br>Mobile: $phone<br>Message: $message<br>mail: $email";

    // Send email
    $mail->send();
    echo ("0");
} catch (Exception $e) {
    echo ("1");
}
?>