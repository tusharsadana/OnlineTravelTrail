<?php
// Import PHPMailer classes into the global namespace

require 'PHPMailer.php';
require 'Exception.php';
require 'SMTP.php';//Load Composer's autoloader

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = "ssl://smtp.gmail.com";                             // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tusharsadana@gmail.com';                 // SMTP username
    $mail->Password = 'TSCRACK!@#!@#HILLS';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@onlinetraveltrail.com', 'Mailer');
    $flyto = $_POST['flyto'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $flyfrom = $_POST['flyfrom'];
    $depart= $_POST['depart'];
    $return = $_POST['return'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $class = $_POST['class'];
    $mail->addAddress('tusharsadana@gmail.com', 'Query');     // Add a recipient


    //Attachments

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'A new Query';
    $mail->Body    = 'Name:'.$name.'<br> Email:'.$email.'<br> Phone:'.$phone.'<br> Fly From:'. $flyfrom . '<br> Fly to:' . $flyto . '<br> Departure Date:' . $depart . '<br> Return Date: ' .$return. '<br> Number of Adults:' .$adult. '<br> Num of Children:' .$child. '<br> Class:' .$class ;


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
<meta http-equiv="refresh" content="0.01; url=index.php" />
