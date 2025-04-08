<?php
include "connection.php";
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Retrieve form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messageContent = $_POST['message'];

$sql = "INSERT INTO form (name,mobile,email,subject,message) VALUES('$name','$mobile','$email','$subject','$messageContent')";
$result = mysqli_query($conn, $sql);


// Create a new PHPMailer instance
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
    $mail->addAddress($email); 

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = "Name: $name<br>Mobile: $mobile<br>Message: $messageContent";

    // Send email
    $mail->send();
    echo json_encode(array('status' => 'success', 'message' => 'Email has been sent.'));
} catch (Exception $e) {
    echo json_encode(array('status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
}