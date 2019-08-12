<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';
require '../library/PHPMailerAutoload.php';

    $email = $_POST['email'];
    $token = $password = password_hash($email, PASSWORD_DEFAULT);
   


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;smtp2.example.com';  // Specify main and backup SMTP servers
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
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}









           
     
        $query = "SELECT * FROM users";        
        $res = my_query($query);   
        
        $size = sizeof($res); 
        
        for ($i=0; $i <$size; $i++) { 
           
        if ($username == $res[$i]['username']) 
        {
           $erro=2;
        }
           
    
        }



    if ($terms == 1 && $password == $re_pass && $erro == NULL ) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nome,username,password,email,estado,tipo) VALUES ('".$name."','".$username."','".$password."','".$email."',1,'user')";
        pr($query);
        my_query($query);
        
        
        header ('location: login.php');
    }elseif ($erro==2) {
        header ('location: register.php?erro=2');
    
        
    }else {
        header ('location: register.php?erro=1');
    }

    


?>