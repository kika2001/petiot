<?php 
                
                $query = "SELECT * FROM blog_titulo WHERE estado =1";
                $res = my_query($query);

                foreach ($res as $key => $value) {

                ?>
                
                <div class="banner_inner_text">
                    <h2>Blog</h2>
                    <p>Leia as notícias</p>
                </div>

                <?php } ?>