<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'guide.me.create@gmail.com';               
    $mail->Password   = 'iikkemaedfxuuuul';                          
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
    $mail->Port       = 465;                      

    //Recipients
    $mail->setFrom('guide.me.create@gmail.com', 'alaa mahfoz ');
    $mail->addAddress('ahmedabubakr148@gmail.com ', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

  

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
