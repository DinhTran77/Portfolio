<?php

use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $from_name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $to = 'dinh@programmingmonk.com'; //this email address that you want to receive the email
    $from = 'dinh@programmingmonk.com'; //this is who the email is from

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.programmingmonk.com';
    $mail->Port = 465;
    $mail->Username = "dinh@programmingmonk.com";
    $mail->Password = 'Letme7777';

    $mail->IsHTML(true);
    $mail->From = $to;
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Body = $msg;

    $mail->AddAddress($to);
    $mail->Subject = 'Message from client: ' . $email;

    if (!$mail->Send()) {
        print_r('Mailer Error: ' . $mail->ErrorInfo);

    } else {
        print_r('Email sent successfully!');
    }

}
