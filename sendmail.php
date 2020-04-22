
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\Users\MMkolwe\vendor\autoload.php';

$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom('matinjj80@gmail.com');
   $mail->addAddress('martinjj80@gmail.com');
   $mail->Subject = 'Force';
   $mail->Body = 'There is a great disturbance in the Force.';
  /// $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
  // $mail->SMTPAuth = TRUE;
   //$mail->SMTPSecure = 'tls';
//    $mail->Username = 'smtp@empire.com';
//    $mail->Password = 'iamyourfather';
   $mail->Port = 587;
   
   /* Enable SMTP debug output. */
   $mail->SMTPDebug = 4;
   /* Use SMTP. */
$mail->isSMTP();

/* Google (Gmail) SMTP server. */
//$mail->Host = 'smtp.gmail.com';

/* SMTP port. */
$mail->Port = 587;

/* Set authentication. */
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
/* Username (email address). */
$mail->Username = 'martinjj80@gmail.com';

/* Google account password. */
$mail->Password = 'ennjj2017';
   
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}