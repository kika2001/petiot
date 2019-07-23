<?php 
                $query = "SELECT * FROM about_company  WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>
<section class="challange_area p_100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="challange_text_inner">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>We don’t hide, we stand tall in front of chalenge</h2>
                            </div>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
                            <div class="c_video">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=62QYQE6k7tg"><img src="img/icon/video-icon.png" alt="">See how we work </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 challange_img">
                        <div class="challange_img_inner">
                            <img class="img-fluid" src="img/popup-photo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <?php }?>