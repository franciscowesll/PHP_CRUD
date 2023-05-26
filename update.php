<?php
$conex = mysqli_connect('Servidor','root','masterkey','tersys');



if($POST['action']=='update'){
	$id = $POST['id'];
	$name = $POST['name'];
	$valor = $POST['valor'];
	$query = "update item set prod_vl_compra = $valor where item_codigo like = $id";
}

?>
