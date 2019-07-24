<section class="service_feature">
            <div class="container">
                <div class="row feature_inner">

                <?php
                
                $query = "SELECT * FROM banner_produtos WHERE estado =1";
                $res = my_query($query);
                
                foreach ($res as $key => $value) {
                                    
                ?>


                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="img/icon/<?php echo $value['icon'] ?>" alt="">
                            </div>
                            <h4><?php echo $value['titulo'] ?></h4>
                            <p><?php echo $value['texto'] ?></p>
                            <a class="more_btn" href="#">Saiba mais</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>