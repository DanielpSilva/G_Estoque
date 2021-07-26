<html>
<meta http-equiv="refresh" content="0; url=deposito.php">
</html>


<?php
	session_start();
	include("conexao.php");

	$empresa = $_SESSION['idempresa'];
	
	
	
	$deposito = mysqli_real_escape_string($conn, $_POST['deposito']);
	
	$result_deposito = "INSERT INTO `depositos`
	(`deposito_nome`, 
	`deposito_empresa_id`) 
	VALUES (
	'$deposito',
	'$empresa')";
	$resultado_deposito = mysqli_query($conn, $result_deposito);
	var_dump($resultado_deposito);
	
	
	
	
?>