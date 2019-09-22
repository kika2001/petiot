<?php
include '../library/config.lib.php';
include '../library/functions.lib.php';
include '../library/db.lib.php';
?>



<?php 



    if (isset($_POST["add_to_cart"])) {
        
        if(isset($_SESSION["shopping_cart"]))
        {

            $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
            if(!in_array($_GET["id"],$item_array_id))
            {

                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(

                    'item_id' => $_GET["id"],
                    'item_name' => $_POST["nome_produto"],
                    'item_price' => $_POST["preco_produto"],
                    'item_quantity' => $_POST["quantidade"]

                );
                $_SESSION["shopping_cart"][$count] = $item_array;

            }else{

                echo '<script>alert("Item já está adicionado")</script>';
                echo '<script>window.location="user_encomenda.php"</script>';

            }

        }else{

            $item_array = array(

                'item_id' => $_GET["id"],
                'item_name' => $POST["nome_produto"],
                'item_price' => $_POST["preco_produto"],
                'item_quantity' => $_POST["quantidade"]

            );
            $_SESSION["shopping_cart"][0] = $item_array;

        }


    }

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                if ($values["item_id"] == $_GET["id"]) {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Item Removido")</script>';
                    echo '<script>window.location="user_encomenda.php"</script>';
                }
            }
        }
    }

?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Comprar máquinas</title>
<link href="../css/bootstrap.min_encomendas.css" rel="stylesheet">
<link href="../css/font-awesome.min_encomendas.css" rel="stylesheet">
<link href="../css/prettyPhoto.css" rel="stylesheet">
<link href="../css/price-range.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/responsive_encomendas.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<div class="features_items"><!--features_items-->
<br> <br>
	<h2 class="title text-center">Máquinas</h2>
	
			<?php 
			
			
			$query = "SELECT * FROM produtos WHERE tipo_produto = 5 ";
			$res = my_query($query);
			$size = sizeof($res);


			foreach ($res as $key => $value) {
				?>
                <form action="inserir_cart.php">
				<div class="col-sm-4">
						<div  style ="width:250px" class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<img src="../img/produtos/<?php echo $value['foto'] ?>" alt="" />
                                <p><?php echo $value['nome']; ?></p>
                                <h2><?php echo $value['preco'];?>€</h2>
								<input type="text" name= "quantidade" class = "form-control" value="1">
                                <input type="hidden" name ="nome_produto" value="<?php echo $value['nome']; ?>">
                                <input type="hidden" name ="preco_produto" value="<?php echo $value['preco']; ?>">
								<input type="submit" name= "add_to_cart" style ="margin-top: 5px;" class="btn btn-default add-to-cart" value ="Adicionar ao Carrinho">
							</div>
								</div>
								<div class="choose">
						</div>
					</div>
				</div>
                </form>


				<?php 
			}

				?>
                
               
</div>

<div class="features_items"><!--features_items-->
<br> <br>
	<h2 class="title text-center">Máquinas</h2>
	
			<?php 
			
			
			$query = "SELECT * FROM produtos WHERE tipo_produto = 6 ";
			$res = my_query($query);
			$size = sizeof($res);


			foreach ($res as $key => $value) {
				?>
                <form action="inserir_cart.php">
				<div class="col-sm-4">
						<div  style ="width:250px" class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<img src="../img/produtos/<?php echo $value['foto'] ?>" alt="" />
                                <p><?php echo $value['nome']; ?></p>
                                <h2><?php echo $value['preco'];?>€</h2>
								<input type="text" name= "quantidade" class = "form-control" value="1">
                                <input type="hidden" name ="nome_produto" value="<?php echo $value['nome']; ?>">
                                <input type="hidden" name ="preco_produto" value="<?php echo $value['preco']; ?>">
								<input type="submit" name= "add_to_cart" style ="margin-top: 5px;" class="btn btn-default add-to-cart" value ="Adicionar ao Carrinho">
							</div>
								</div>
								<div class="choose">
						</div>
					</div>
				</div>
                </form>


				<?php 
			}

				?>
                
               
</div>

<div class="features_items"><!--features_items-->
<br> <br>
	<h2 class="title text-center">Máquinas</h2>
	
			<?php 
			
			
			$query = "SELECT * FROM produtos WHERE tipo_produto = 7 ";
			$res = my_query($query);
			$size = sizeof($res);


			foreach ($res as $key => $value) {
				?>
                <form action="inserir_cart.php">
				<div class="col-sm-4">
						<div  style ="width:250px" class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<img src="../img/produtos/<?php echo $value['foto'] ?>" alt="" />
                                <p><?php echo $value['nome']; ?></p>
                                <h2><?php echo $value['preco'];?>€</h2>
								<input type="text" name= "quantidade" class = "form-control" value="1">
                                <input type="hidden" name ="nome_produto" value="<?php echo $value['nome']; ?>">
                                <input type="hidden" name ="preco_produto" value="<?php echo $value['preco']; ?>">
								<input type="submit" name= "add_to_cart" style ="margin-top: 5px;" class="btn btn-default add-to-cart" value ="Adicionar ao Carrinho">
							</div>
								</div>
								<div class="choose">
						</div>
					</div>
				</div>
                </form>


				<?php 
			}

				?>
                
               
</div>


            <div class="table-responsive">
            
            <table class ="table table-bordered">
            <tr>
            
            <th width ="40%">Nome do Produto</th>
            <th width ="10%">Quantidade</th>
            <th width ="20%">Preço</th>
            <th width ="15%">Total</th>
            <th width ="5%">Ação</th>
            </tr>
            <?php 
            
            $query5 = "SELECT * FROM carrinho";
            $res5 = my_query($query5);
            ?>
            <tr>
            <?php
            foreach ($res5 as $key => $value) {
                
            
            ?>
            <td><?php echo $value['nome_produto']; ?></td>
            <td><?php echo $value['quantidade_produto']; ?></td>
            <td>$<?php echo $value['preco_produto']; ?></td>
            <td><?php echo number_format($value['quantidade_produto'] * $value['preco_produto'],2); ?></td>
            <td><a href="remove_encomenda.php?id=<?php echo $value["id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>

            <tr>
            <?php } ?>
            </tr>


        
            </table>
            
            </div>
            <form action="sucesso.php">
            <button id="submit" name ="submit" type="submit" class="btn btn-default">Comprar</button>
            </form>
