<?php 

$url = $_SERVER['SERVER_NAME'];
if (!isset($_GET['token'])) {
	header('Location:' . $_SERVER[REQUEST_URI]. '?token=0');
	exit();
}
$token = $_GET['token'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mudar Palavra pass</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="tratamudarpass.php?token='<?php echo $token ?>'">
                        <h2 class="form-title">Mudar Palavra Pass</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Palavra-passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repita a palavra-passe"/>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Mudar Palavra Pass"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main2.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>