<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../library/PHPMailer/src/Exception.php';
require '../library/PHPMailer/src/PHPMailer.php';
require '../library/PHPMailer/src/SMTP.php';

    $email = $_POST['email'];
    $token = $password = password_hash($email, PASSWORD_DEFAULT);
   


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'petiotportugal@gmail.com';                 // SMTP username
$mail->Password = 'saldanha';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'petiotportugal@gmail.com';
$mail->FromName = 'Petiot';
$mail->addAddress($email);               // Name is optional


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Muda a password aqui: http://localhost/petiot/admin/mudarpass?token='.$token.' <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}









           
     
        $query = "SELECT * FROM users WHERE email ='". $email."'";        
        $res = my_query($query);   
        
        $size = sizeof($res); 
        
        for ($i=0; $i <$size; $i++) { 
           
        if ($email == $res[$i]['email']) 
        {
           $sucesso =1;
           $user = $res[$i]['username'];
        }           
    
        }




        $token = password_hash($email, PASSWORD_DEFAULT);
        $query = "UPDATE users SET token ='".$token."' WHERE email ='". $email."';";
        pr($query);
        my_query($query);
        
        die();
        header ('location: login.php');
    
    


?>