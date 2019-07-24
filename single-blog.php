
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
        </header>
        <!--================End Header Menu Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Blog</h2>
                    <p>Read the news</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        <?php 
        
        $id=$_GET['id'];
        $query = "SELECT * FROM blog WHERE estado =1 AND id=$id";
        $res = my_query($query);

        foreach ($res as $key => $value) {
            
        
        
        ?>
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single_blog_inner">
                            <div class="s_blog_main">
                                <div class="blog_img">
                                    <img class="img-fluid" src="img/blog/<?php echo $value['imagem'] ?>" alt="">
                                    <div class="blog_date">
                                        <h4><?php echo $value['dia'] ?></h4>
                                        <h5><?php echo $value['mes_ano'] ?></h5>
                                    </div>
                                </div>
                                <div class="blog_text">
                                    <a href="#"><h4><?php echo $value['titulo'] ?></h4></a>
                                    <div class="blog_author">
                                        <a href="#">By <?php echo $value['autor'] ?></a>
                                    </div>
                                    <p><?php echo $value['noticia'] ?></p>
                                   
                                </div>
                            </div>
        <?php } ?>
                            <!--div class="blog_comment">
                                <h3>Comments (2)</h3>
                                <div class="media">
                                    <img src="img/comment/comment-1.png" alt="">
                                    <div class="d-flex">
                                        <h4>Sophia Willams</h4>
                                        <h5>Oct 29, 2017</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec ele mentum id, suscipit id nulla. Nulla sit amet luctus doloructus. Fusce eleifend purus vel eros</p>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="img/comment/comment-2.png" alt="">
                                    <div class="d-flex">
                                        <h4>Gabriel Smith</h4>
                                        <h5>Oct 29, 2017</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec ele mentum id, suscipit id nulla. Nulla sit amet luctus doloructus. Fusce eleifend purus vel eros</p>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div-->
                            <!--div class="blog_comment_form">
                                <h3>Leave a comment</h3>
                                <form class="row contact_us_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                                    </div>
                                </form>
                            </div-->
                        </div>
                    </div>
                    <!--div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Vestibulum maximus</a></li>
                                    <li><a href="#">Nisi eu lobortis pharetra</a></li>
                                    <li><a href="#">Orci quam accumsan</a></li>
                                    <li><a href="#">Auguen pharetra massa</a></li>
                                    <li><a href="#">Tellus ut nulla</a></li>
                                    <li><a href="#"> Etiam egestas viverra </a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget insta_widget">
                                <div class="r_w_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-1.jpg" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-2.jpg" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-3.jpg" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-4.jpg" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-5.jpg" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="img/instagram/right-instagram/r-in-6.jpg" alt="">
                                    </a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget tag_widget">
                                <div class="r_w_title">
                                    <h3>Tags</h3>
                                </div>
                                <ul>
                                    <li><a href="#">branding</a></li>
                                    <li><a href="#">identity</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">inspiration</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">video</a></li>
                                    <li><a href="#">photography</a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget quote_widget">
                                <div class="r_w_title">
                                    <h3>Quote</h3>
                                </div>
                                <img src="img/icon/quote-icon.png" alt="">
                                <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volut pat. Donec fermen tum convallis.</p>
                            </aside>
                            <aside class="r_widget add_widget">
                                <div class="r_w_title">
                                    <h3>Add</h3>
                                </div>
                                <img class="img-fluid" src="img/add.jpg" alt="">
                            </aside>
                        </div>
                    </div-->
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
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
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>