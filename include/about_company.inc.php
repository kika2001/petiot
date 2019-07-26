<?php 
                $query = "SELECT * FROM about_company  WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>
<section class="challange_area p_100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="challange_text_inner">
                            <div class="l_title">
                                <img src="img/icon/<?php echo $res[$i]['icon'] ?>" alt="">
                                <h6><?php echo $res[$i]['titulo'] ?></h6>
                                <h2><?php echo $res[$i]['subtitulo'] ?></h2>
                            </div>
                            <p><?php echo $res[$i]['texto'] ?></p>
                            <div class="c_video">
                                <a class="popup-youtube" href="<?php echo $res[$i]['link_video'] ?>"><img src="img/icon/video-icon.png" alt="">See how we work </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 challange_img">
                        <div class="challange_img_inner">
                            <img class="img-fluid" src="img/<?php echo $res[$i]['imagem'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <?php }?>