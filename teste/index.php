<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PetIoT</title>
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  

  <?php
  include 'library/config.lib.php';
      $error = '';
      $texto="Prencha os campos";

      //Establishing Connection with server by passing server_name, user_id and pass as a patameter
      $conn = mysqli_connect($arrConfig['servername'], $arrConfig['username'], $arrConfig['password'], $arrConfig['dbname']);
      if(isset($_POST['submit'])) {
        if(isset($_POST['user']) && isset($_POST['pass'])) {
          //get user data (hmm, hmm *Google Aproves*)
          $user = mysqli_real_escape_string($conn,$_POST['user']);
          $pass = mysqli_real_escape_string($conn,$_POST['pass']);

          //$pass = md5($pass); -> we'll use it later

          $query = mysqli_query($conn,"SELECT * FROM login WHERE user='$user' AND pass='$pass'"); //get data from database (in the login section) - (oh, and bring some eggs and milk please)


          $data = mysqli_fetch_array($query); //put data in an array so we can see it (we can't actually see it but the bytes... aaa forget it)
         

          if($query->num_rows > 0) {
            if($data['estado'] == "0") {
              //0 == admin, he is the lord
              header('Location: admin/home.php');
              mysqli_close($conn);
            } else {
              //1 == user, meh, just a random user
              header('Location: /cliente/home.php?user='.$_POST['user']);
              mysqli_close($conn);
            }
          } else {
            $texto= "User doesn't exist";
          }
        } else {
          $texto= "Please fill all fields"; //in case the user is dumb (or a Ricardinho)
        }
      }

?>


<div id="pagina">
    <form method="post" action="index.php">
      <img class="imagem" src="images/Black_Cat.png" width=80px; alt=""> <br>
      
      <input class ="campos" type="text" name="user" placeholder="Username"> <br>
      <input class ="campos" type="password" name="pass" placeholder="Senha"> <br>
      <input class ="botao" type="submit" name="submit" value="Login!"> <br>
      
       <h4><?php echo $texto?></h4>

    </form>
  </div>
</body>
</html>


