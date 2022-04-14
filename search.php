

	<?php 
		
			
			
		$conex = mysqli_connect('Servidor','root','masterkey','tersys');

		if(isset($_GET['busca'])){
			$search = $_GET['busca'];
			$query = "SELECT docitem_descricao, docitem_vl_unit FROM docitem WHERE docitem_descricao LIKE '$search%'";
		}
			
		else{
			$search = !empty($_GET);
			$query = "SELECT docitem_descricao, docitem_vl_unit FROM docitem";}
		
		
	
			$result = mysqli_query($conex,$query);
			
			if($result){
				while($row = mysqli_fetch_array($result)){
					$name = $row["docitem_descricao"];	
					$valor = $row["docitem_vl_unit"]*1.6;

					echo $name."<span>"."----------------------------------->".$valor."</span>"."<br/> <br/>";
					
					
				}
			}	
					
				
			
	
	?>


  
	