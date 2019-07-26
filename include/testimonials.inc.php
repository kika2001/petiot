<?php 
                $query = "SELECT * FROM testimonials WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                  
                    
                    
                    <div class="item">
                        <h4>“<?php echo $res[$i]['titulo'] ?>”</h4>
                        <p><?php echo $res[$i]['texto'] ?></p>
                        <div class="media">
                            <img src="img/team/people/<?php echo $res[$i]['imagem'] ?>" alt="">
                            <div class="media-body">
                                <h5><?php echo $res[$i]['nome'] ?></h5>
                                <h6><?php echo $res[$i]['cargo'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>