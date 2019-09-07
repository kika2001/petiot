<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOME</title>
  <link rel="stylesheet" href=" ../css/menus.css">
 
  
</head>

<body>
<?php 

  session_start();
  include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';
$addurl= '?user='. $_GET['user']; 
include 'menu.php';  
   
   
   
   ?>


<!-- <div class ="caixaemail">

<form method="post" name="contact_form" action="contact-form-handler.php">
    Your Name:
    <input type="text" name="name">
    Email Address:
    <input type="text" name="email">
    Message:
    <textarea name="message"></textarea>
    <input type="submit" value="Submit">
</form>
<script language="JavaScript">


//------------------------------JAVASCRIPT------------------------------
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
  "Please enter a valid email address");


</script>
-->

</div>









  


  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>