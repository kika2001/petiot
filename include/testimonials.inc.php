<?php 
                $query = "SELECT * FROM testimonials WHERE estado = 1 ";
                $res = my_query($query);
                $size = sizeof($res);

                for($i=0; $i<$size; $i++) {  ?>                  
                    
                    
                    <div class="item">
                        <h4>“They are the best”</h4>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                        <div class="media">
                            <img src="img/team/people/people-5.jpg" alt="">
                            <div class="media-body">
                                <h5>Chriss Turner</h5>
                                <h6>CEO Enterprise</h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>