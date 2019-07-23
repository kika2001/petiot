<?php 
                $query = "SELECT * FROM company WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                    
                    
                    
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <img src="<?php echo $res[$i]['icon'] ?>" alt="">
                                <h6><?php echo $res[$i]['titulo'] ?></h6>
                                <h2><?php echo $res[$i]['sub_titulo'] ?></h2>
                            </div>
                            <p><?php echo $res[$i]['texto'] ?></p>
                            <!--<ul>
                                <li><a href="#">Nunc nec maximus dui, </a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Aenean pellentesque elit vitae</a></li>
                                <li><a href="#">Ex mauris, ornare eget pretium </a></li>
                                <li><a href="#">Cras ex mauris, ornare eget preti</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team_img_inner">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="<?php echo $res[$i]['imagem1'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="<?php echo $res[$i]['imagem2'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="<?php echo $res[$i]['imagem3'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="<?php echo $res[$i]['imagem4'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>