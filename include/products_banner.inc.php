<?php 
                $query = "SELECT * FROM products_banner WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                  
                    

<div class="banner_inner_text">
        <h2><?php echo $res[$i]['titulo'] ?></h2>
        <p><?php echo $res[$i]['subtitulo'] ?></p>
    </div>

    <?php } ?>