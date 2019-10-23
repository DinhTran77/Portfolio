<?php

use PHPMailer\PHPMailer\PHPMailer;

/* Exception class. */
require './PHPMailer/src/Exception.php';

/* The main PHPMailer class. */
require '.\PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require '.\PHPMailer\src\SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $from_name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $to = 'dinhtran77@hotmail.com'; //this email address that you want to receive the email
    $from = 'dinhtran77@hotmail.com'; //this is who the email is from

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.live.com';
    $mail->Port = 587;
    $mail->Username = 'dinhtran77@hotmail.com';
    $mail->Password = 'Letme8888';

    $mail->IsHTML(true);
    $mail->From = $to;
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Body = $msg;

    $mail->AddAddress($to);
    $mail->Subject = 'Message from client: ' . $email;

    if (!$mail->Send()) {
        print_r("Email failed");

    } else {
        print_r('email sent');
    }

}
