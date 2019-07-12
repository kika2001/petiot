<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/index.css">
    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="admin/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="post" action="index.php">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="user" placeholder="Introduza o seu Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pass" placeholder="Introduza a sua senha">
                                </div>                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit" value="Login!">Log In</button>
                                <div class="social-login-content">                                   
                                </div>
                            </form>
                            <div class="register-link">                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
  
  <?php
      $error = '';

      //Establishing Connection with server by passing server_name, user_id and pass as a patameter
      $conn = mysqli_connect("localhost", "root", "", "projeto");
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
              header('Location: home.php');
              mysqli_close($conn);
            } else {
              //1 == user, meh, just a random user
              header('Location: /cliente/homecliente.php');
              mysqli_close($conn);
            }
          } else {
            echo "User doesn't exist";
          }
        } else {
          echo "Please fill all fields"; //in case the user is dumb (or a Ricardinho)
        }
      }

?>
</body>
</html>

