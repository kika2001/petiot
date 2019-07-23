<?php 
                $query = "SELECT * FROM product WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>

                    <div class="text_3d">
                        <div class="l_title">
                            <img src="<?php echo $res[$i]['icon'] ?>" alt="">
                            <h6><?php echo $res[$i]['titulo'] ?></h6>
                            <h2><?php echo $res[$i]['sub_titulo'] ?></h2>
                        </div>
                        <p><?php echo $res[$i]['texto'] ?></p>
                    </div>
                    <div class="shap_mobile">
                        <img src="<?php echo $res[$i]['imagem'] ?>" alt="">
                    </div>
                    <?php }?>