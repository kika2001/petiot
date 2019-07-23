<?php
include 'library/config.lib.php';
include 'library/db.lib.php';
include 'library/functions.lib.php';
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Petiot</title>

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
        
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                
                <?php include 'include/feeder.inc.php' ?>
                
                                     
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6>Discover the features</h6>
                    <h2>We are young but bold</h2>
                </div>
                <div class="row feature_inner">

                <?php include 'include/feature.inc.php'; ?>

                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================The best slider Area =================-->
        <section class="best_3d_area">
            <div class="left_3d">
                <div class="shap_slider_inner owl-carousel">

                <?php include 'include/testimonials.inc.php'; ?>
                    
                </div>
            </div>
            <div class="right_text">
                <div class="right_text_inner">
                    
                <?php include 'include/product.inc.php'; ?>

                </div>
            </div>
        </section>
        <!--================End The best slider Area =================-->
        
        <!--================Team People Area =================-->
        <section class="team_people_area">
            <div class="container-fluid">
                <div class="row">
                <?php include 'include/company.inc.php'; ?>

                </div>
            </div>
        </section>
        <!--================End Team People Area =================-->
        
        <!--================Get in Touch Area =================-->
                <?php /*include 'include/email.inc.php';*/ ?> 
        <!--================End Get in Touch Area =================-->
        
        <!--================Map Area =================-->
        <!--<section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>Gibraltar Office</h3>
                        <p>Casemates Square, no253 <br /> United kingdom</p>
                        <h4><a href="#">+453678 9283 559</a> <a href="#">contact@template.com</a></h4>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <?php include 'include/footer.inc.php'; ?>
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
        
        <script src="js/theme.js"></script>
    </body>
</html>