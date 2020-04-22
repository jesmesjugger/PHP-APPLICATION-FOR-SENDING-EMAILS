<?php
require "phpmailer/PHPMailerAutoload.php";
//create an instance of PHPMailer
$mail= new PHPMailer();
//set a host
$mail->Host="smtp.gmail.com";
//enamble smtp

$mail->isSMPT();
//authenticate
$mail->SMTPAuth="true";
//login details
$mail->Username="martinjj80@gmail.com";
$mail->Password="ennjj2017";
//set port
$mail->Port=465;
//set subject
$mail->Subject="test mail";
//set body
$mail->Body="this is the mail body....";
//set sender of the email
$mail->setFrom("martinjj80@gmail.com","martin jj");
//set recipients
$mail->addAddress("mercymartins16@gmail.com");
//send email
if($mai->send()){
    echo "mail sent successfully";
}
else
echo "something wrong happened"










?>