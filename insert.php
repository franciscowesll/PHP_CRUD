<?php
$dsn = "mysql:host=127.0.0.1;dbname=cadastro;port=3306;charset=utf8";
$username = "root";

	
$db = new PDO($dsn, $username);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$valor = $_POST["search"];
$tel = 981753040;
$email = "franciscowesll@gmail.com";
$query = "INSERT INTO `contact` (`nome`, `tel`, `email`) VALUES (:nome,:tel,:email)";
$preparedStatement = $db->prepare($query);
$preparedStatement->execute(['nome'=>$valor,
							 'tel'=>$tel,
							 'email'=>$email]);
?>