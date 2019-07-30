
        <?php 
        
        
        $query = "SELECT * FROM blog WHERE estado =1 LIMIT 0,3";
        $res = my_query($query);
        
        foreach ($res as $key => $value) {
            
        
        ?>
                            <div class="blog_main_item">
                                <div class="blog_img">
                                    <img width="825" height="254" class="" src="img/blog/<?php echo $value['imagem'] ?>"  alt="">
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
                                    <p><?php echo $value['introducao'] ?></p>
                                    <a class="more_btn" href="single-blog.php?id=<?php echo $value['id'] ?>">Ler Mais</a>
                                </div>
                            </div>

        <?php }?>