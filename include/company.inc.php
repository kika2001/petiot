<?php 
                $query = "SELECT * FROM company WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                    
                    
                    
                    <div class="col-lg-6">
                        <div class="team_people_text">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>We build a strong team of great people</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra.</p>
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
                                        <img src="img/team/people/people-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="team_img_item">
                                        <img src="img/team/people/people-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>