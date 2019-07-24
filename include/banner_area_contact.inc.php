<?php 
                $query = "SELECT * FROM banner_area_contact WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>   
 <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2><?php echo $res[$i]['titulo'] ?></h2>
                    <p><?php echo $res[$i]['subtitulo'] ?></p>
                </div>
            </div>
        </section>
        <?php }?>