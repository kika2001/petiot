<?php 
                $query = "SELECT * FROM feature WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>

                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <img src="<?php echo $res[$i]['imagem'] ?>" alt="">
                            </div>
                            <h4><?php echo $res[$i]['titulo'] ?></h4>
                            <p><?php echo $res[$i]['texto'] ?></p>
                            <a class="more_btn" href="<?php echo $res[$i]['link'] ?>"><?php echo $res[$i]['texto_botao'] ?></a>
                        </div>
                    </div>  
                <?php }?>
