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

$sql = "INSERT INTO contact(f_name,l_name,phone,email,message) VALUE('$fname','$lname','$phone','$email','$hpone','$email','$message')";
$query = mysqli_query($conn, $sql);

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
    $mail->Subject = $subject;
    $mail->Body = "Name: $name<br>Mobile: $mobile<br>Message: $messageContent<br>mail: $email";

    // Send email
    $mail->send();
    echo json_encode(array('status' => 'success', 'message' => 'Email has been sent.'));
} catch (Exception $e) {
    echo json_encode(array('status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
}