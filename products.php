
<?php
include 'library/config.lib.php';
include 'library/db.lib.php';
include 'library/functions.lib.php';
$url = $_SERVER['SERVER_NAME'];
if(!isset($_GET['linguas'])) {
  header('Location: '.$_SERVER[REQUEST_URI].'?linguas=pt');
  exit();
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Sierra</title>

<!-- Icon css link -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Rev slider css -->
<link href="vendors/revolution/css/settings.css" rel="stylesheet">
<link href="vendors/revolution/css/layers.css" rel="stylesheet">
<link href="vendors/revolution/css/navigation.css" rel="stylesheet">

<!-- Extra plugin css -->
<link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
<link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">


<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!--================Header Menu Area =================-->
<?php include 'include/header.inc.php' ?>
<!--================End Header Menu Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
<div class="container">
    <div class="banner_inner_text">
        <h2>Produtos</h2>
        <p>O melhor que podemos oferecer</p>
    </div>
</div>
</section>
<!--================End Banner Area =================-->

<!--================End Banner Area =================-->
<?php include 'include/banner.inc.php' ?>
<!--================End Banner Area =================-->

<!--================Circle Chart Area =================-->
<section class="circle_chart_area">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                <div class="circle_progress_inner">
                    <strong></strong>
                    <span class="percentage"></span>
                    <h4>Hard work</h4>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                <div class="circle_progress_inner">
                    <strong></strong>
                    <span class="percentage"></span>
                    <h4>Creativity</h4>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                <div class="circle_progress_inner">
                    <strong></strong>
                    <span class="percentage"></span>
                    <h4>Good luck</h4>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                <div class="circle_progress_inner">
                    <strong></strong>
                    <span class="percentage"></span>
                    <h4>Development</h4>
                </div> 
            </div>
        </div>
    </div>
</div>
</section>
<!--================End Circle Chart Area =================-->

<!--================Service Solution Area =================-->
<section class="service_solution_area p_100">
<div class="container">
    <div class="row s_solution_inner">
        <div class="col-lg-6">
            <div class="s_solution_item">
                <div class="l_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6>Descubra as funcionalidades</h6>
                    <h2>Soluções simplas para tempos complicados</h2>
                </div>
                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                <div id="accordion" role="tablist" class="solution_collaps">

                <?php 
                
                $query = "SELECT * FROM funcionalidades WHERE estado =1";
                $res = my_query($query);

                foreach ($res as $key => $value) {

                ?>

                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $value['id']?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse<?php echo $value['id']?>" aria-expanded="true" aria-controls="collapse<?php echo $value['id']?>">
                               <?php echo $value['funcionalidade'] ?>
                                <i class="minus">-</i>
                                <i class="plus">+</i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse<?php echo $value['id']?>" class="collapse show" role="tabpanel" aria-labelledby="heading<?php echo $value['id']?>" data-parent="#accordion">
                            <div class="card-body">
                                <p><?php echo $value['explicacao']?> </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--================End Service Solution Area =================-->

<!--================Footer Area =================-->
<?php include 'include/footer.inc.php' ?>
<!--================End Footer Area =================-->




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- Extra plugin css -->
<script src="vendors/counterup/jquery.waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script> 
<script src="vendors/counterup/apear.js"></script>
<script src="vendors/counterup/countto.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="vendors/circle-bar/circle-progress.min.js"></script>
<script src="vendors/circle-bar/plugins.js"></script>

<script src="js/circle-active.js"></script>
<script src="js/theme.js"></script>
</body>
</html>