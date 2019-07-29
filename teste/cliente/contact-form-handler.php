<?php
$errors = '';
$myemail = 'petiotportugal@gmail.com';//<-----Put Your email address here.
//if(empty($_POST['name'])  ||
  // empty($_POST['email']) ||
   //empty($_POST['message']))
//{
//    $errors .= "\n Error: all fields are required";
//}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$message = str_replace("\n.", "\n..", $message);


$subject = "Pergunta do cliente: ".$name;
$headers = "From: ". $email_address;

mail($myemail,$subject,$message,$headers);

header('Location: mensagens.php');

?>