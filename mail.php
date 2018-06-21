<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$message = $_POST['message'];
$replyTo = $_POST['email'];
$name = $_POST['name'];
//$template = file_get_contents("email_template/template.html");



$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'onlinetraveltrail18@gmail.com';                 // SMTP username
$mail->Password = 'onlinetraveltraildolly';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                // TCP port to connect to

//Recipients
$mail->setFrom($replyTo, $name);
$mail->addAddress('info@onlinetraveltrail.com', 'Online travel');

    $mail->addReplyTo($replyTo);

//Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Booking';
    $mail->Body    = $message;


    $mail->send();
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location: http://onlinetraveltrail.com/");
    }

?>



