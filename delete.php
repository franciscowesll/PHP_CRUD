<?php
$conex = mysqli_connect('Servidor','root','masterkey','tersys');



if($POST['action']=='update'){
	$id = $POST['id'];
	$name = $POST['name'];
	$valor = $POST['valor'];
	$query = "delete from item where item_codigo = $id";
	$result = mysqli_query($conex,$query);
	if($result){
	echo "
	<script>
		alert('item deletado');
	</script>"	
	}
}

?>
