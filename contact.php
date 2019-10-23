<?php
// require "../PHPMailer/PHPMailerAutoload.php";
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    print_r('sucesss');
}

// $from_name = $_POST['name'];
// $email = $_POST['email'];
// $msg = $_POST['comment'];
// $to = 'dinhtran77@hotmail.com'; //this email address that you want to receive the email
// $from = 'dinhtran77@hotmail.com'; //this is who the email is from

// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->SMTPAuth = true;

// $mail->SMTPSecure = 'tls';
// $mail->Host = 'smtp.live.com';
// $mail->Port = 587;
// $mail->Username = 'dinhtran77@hotmail.com';
// $mail->Password = 'Letme8888';

// $mail->IsHTML(true);
// $mail->From = $to;
// $mail->FromName = $from_name;
// $mail->Sender = $from;
// $mail->AddReplyTo($from, $from_name);
// $mail->Body = $msg;

// $mail->AddAddress($to);
// $mail->Subject = 'Message from client: ' . $email;

// if (!$mail->Send()) {
//     echo "Please try Later, Error Occured while Processing...";

// } else {
//     print_r($_POST);
// }

// }
