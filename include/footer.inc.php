<?php 
                $query = "SELECT * FROM company WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>    
<footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="<?php echo $res[$i]['logo'] ?>" alt="">
                                <p><?php echo $res[$i]['texto'] ?></p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3><?php echo $res[$i]['subscricao'] ?></h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $res[$i]['texto_text'] ?>" aria-label="<?php echo $res[$i]['texto_text'] ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button"><?php echo $res[$i]['texto_botao'] ?></button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </h5>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
        </footer>
        <?php }?>