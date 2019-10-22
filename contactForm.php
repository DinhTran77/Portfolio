<?php
require "./PHPMailer/PHPMailerAutoload.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$from_name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['comment'];

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        // $mail->SMTPSecure = 'ssl'; 
        // $mail->Host = 'mail.programmingmonk.com ';
        // $mail->Port = 465;  
        // $mail->Username = 'dinh@programmingmonk.com';
        // $mail->Password = 'Letme7777';   
   
        $to   = 'dinhtran77@hotmail.com';
        $from = 'dinhtran77@hotmail.com';
        // $name = 'Dinh';
        $subj = 'PHPMailer 5.2 testing from DomainRacer';
        
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = 'smtp.live.com';
        $mail->Port = 587;  
        $mail->Username = 'dinhtran77@hotmail.com';
        $mail->Password = 'Letme8888';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From=$from;
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Body = $msg;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            echo "Please try Later, Error Occured while Processing...";
       
        }
        else 
        {
            echo $from_name.$email.$msg;
        }     
        
}
?>
