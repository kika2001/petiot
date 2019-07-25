<?php 
                
                $query = "SELECT * FROM product_titulo_funcionalidades WHERE estado =1";
                $res = my_query($query);

                foreach ($res as $key => $value) {

                ?>
                <div class="l_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6><?php echo $value['subtitulo']?></h6>
                    <h2><?php echo $value['titulo']?></h2>
                </div>
                <p><?php echo $value['texto']?></p>
                <?php } ?>