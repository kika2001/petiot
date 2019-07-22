<?php 
                $query = "SELECT * FROM product WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>

                    <div class="text_3d">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6>Discover the features</h6>
                            <h2>We don’t hide, we stand tall in front of chalenge</h2>
                        </div>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                    </div>
                    <div class="shap_mobile">
                        <img src="img/iphone4.png" alt="">
                    </div>
                    <?php }?>