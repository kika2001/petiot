<div class="col-sm-12">
                <ul class="nav nav-tabs">

                <?php
                
                $query2 = "SELECT * FROM tipo_produto";
                $res2 = my_query($query2);
                $size2 = sizeof($res2);

                for ($i=0; $i < $size2 ; $i++) { 
                                            
                            
                ?>

                    <li><a href="#<?php echo $res2[$i]['tipo']?>" data-toggle="tab"><?php echo $res2[$i]['tipo']?></a></li>

                <?php } ?>
                </ul>
            </div>

            <?php
            echo '<div class="tab-content">';
            $f = 'in active';
            foreach ($res2 as $value1) {
                $id = $value1['id'];
                $query3 = "SELECT * FROM produtos WHERE tipo_produto = $id";
                $res3 = my_query($query3);
                $tipo = $value1['tipo'];
                echo "<div class='tab-pane fade $f' id='$tipo'>";
                $f = '';
                foreach ($res3 as $value) {?>
                <form action="inserir_cart.php">
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/<?php echo $value['foto_produto'];?>" alt="" />
                                        <h2><?php echo $value['preco_produto'];?>€</h2>
                                        <p><?php echo $value['nome_produto'];?></p>
                                        <input type="text" name= "quantidade" class = "form-control" value="1">
                                        <input type="hidden" name ="nome_produto" value="<?php echo $value['nome_produto']; ?>">
                                        <input type="hidden" name ="preco_produto" value="<?php echo $value['preco_produto']; ?>">
                                        <input href ="inserir_cart.php"type="submit" name= "add_to_cart" style ="margin-top: 5px;" class="btn btn-default add-to-cart" value ="Adicionar ao Carrinho">
                                    </div>
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                    <?php 
                    $f = false;
                }
                echo '</div>';
            }
            echo '</div>';
            ?>
