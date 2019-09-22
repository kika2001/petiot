		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			<div class="panel panel-default">
				<div id="sportswear">
					<div class="panel-body">
						<ul>

						<?php 
						
						$query = "SELECT tipo FROM tipo_produtos";
						$res = my_query($query);
						$size = sizeof($res);


						for ($i=0; $i <$size ; $i++) {                                     
						
						
						?>
							<li><a href="?tipo=<?php echo $res[$i]['tipo']?>"><?php echo $res[$i]['tipo'] ?></a></li>
						<?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div><!--/category-products-->