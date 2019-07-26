                            
                <?php 
                
                $query = "SELECT * FROM blog_quote WHERE estado =1";
                
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>    

                ?>
                            <aside class="r_widget quote_widget">
                                <div class="r_w_title">
                                    <h3><?php echo $res[$i]['titulo'] ?></h3>
                                </div>
                                <img src="img/icon/<?php echo $res[$i]['icon'] ?>" alt="">
                                <p><?php echo $res[$i]['texto'] ?></p>
                            </aside>