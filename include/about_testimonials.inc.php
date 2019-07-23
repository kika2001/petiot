<?php 
                $query = "SELECT * FROM testimonials WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                  
                    
                    
                    <div class="item">
                        <div class="testi_item">
                            <h3>“<?php echo $res[$i]['titulo'] ?>”</h3>
                            <p><?php echo $res[$i]['texto'] ?></p>
                            <div class="media">
                                <div class="d-flex">
                                    <img class="rounded-circle" src="<?php echo $res[$i]['imagem'] ?>" alt="">
                                </div>
                                <div class="media-body">
                                    <h4><?php echo $res[$i]['nome'] ?></h4>
                                    <h5><?php echo $res[$i]['cargo'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>