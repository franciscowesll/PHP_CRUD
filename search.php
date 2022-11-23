<?php 
		
			
			
		
		$conex = mysqli_connect('Servidor','root','masterkey','tersys');
		

		if(isset($_GET['search'])){
			$search = $_GET['search'];
			$queryPrime = "SELECT item_codigo from item where item_descricao like '%{$search}%' ";
		} else { 
			$queryPrime = "SELECT item_codigo from item";
		}
			
$id= [];

$result = mysqli_query($conex,$queryPrime);
			
			if($result){
				while($row = mysqli_fetch_array($result)){
					
				array_push ($id, $row["item_codigo"]);
					
				}
			};

	$color = 2;
	foreach ($id as $item){
					$query = "select it.item_descricao as produto, lr.lucro_perc as lucros, pr.prod_vl_compra as valorUnit from item it inner Join lucro lr ON it.item_codigo = lr.item_codigo Inner Join produto pr On pr.item_codigo = it.ITEM_codigo where it.item_codigo = $item
";

						$resultado = mysqli_query($conex, $query);
						if($resultado){
							
							$row = mysqli_fetch_array($resultado);
							$produto = $row['produto'];
							$lucro = $row['lucros'];
							$valorUnit = $row['valorUnit'];
							
							$vl= ($lucro/100 + 1) * $valorUnit; 
							$valor = number_format($vl, 2);
		
							
						if($valor > 0){
							if($color % 2 == 0){
								echo "<div class='flex' '><div style='border: 1px solid gray'>".$produto."</div><div style='border: 1px solid gray'>".$valor."</div></div>";
								$color++;
							}else {
								echo "<div class='flex' style='background-color: rgb(138, 235, 111)'><div style='border-right: 1px solid gray'>".$produto. "</div><div>".$valor."</div></div>";
								$color++;}
						}
					}
}				
			
	
	?>
		
	
			


  
	