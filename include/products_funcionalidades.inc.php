<?php 
                
                $query = "SELECT * FROM funcionalidades WHERE estado =1";
                $res = my_query($query);

                foreach ($res as $key => $value) {

                ?>

                    <div class="card">
                        <div class="card-header" role="tab" id="heading<?php echo $value['id']?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse<?php echo $value['id']?>" aria-expanded="true" aria-controls="collapse<?php echo $value['id']?>">
                               <?php echo $value['funcionalidade'] ?>
                                <i class="minus">-</i>
                                <i class="plus">+</i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse<?php echo $value['id']?>" class="collapse show" role="tabpanel" aria-labelledby="heading<?php echo $value['id']?>" data-parent="#accordion">
                            <div class="card-body">
                                <p><?php echo $value['explicacao']?> </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>