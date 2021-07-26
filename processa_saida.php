<html>
<meta http-equiv="refresh" content="0; url=saidas.php">
</html>


<?php
include('conexao.php');
	session_start();
	$empresa = $_SESSION['idempresa'];
	//$unidade = $_SESSION['id_unidade'];
	
	
	$deposito = mysqli_real_escape_string($conn, $_POST['deposito']);
	$data   = mysqli_real_escape_string($conn, $_POST['data']);
	$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
	$produto = mysqli_real_escape_string($conn, $_POST['produto']);
	$valorU = mysqli_real_escape_string($conn, $_POST['valor']);
	$valorT = mysqli_real_escape_string($conn, $_POST['valortotal']);
	$total = mysqli_real_escape_string($conn, $_POST['total']);
	
	$result_saida = "INSERT INTO `saidas`
	(`saida_empresa_id`, 
	`saida_deposito_id`, 
	`saida_data`, 
	`saida_quantidade`, 
	`saida_produto_id`, 
	`saida_valor_unitario`, 
	`saida_valor_total`, 
	`saida_total`) 
	VALUES 
	('$empresa',
	 '$deposito',
	 '$data',
	 '$quantidade',
	 '$produto',
	 '$valorU',
	 '$valorT',
	 '$total')";
	
	$resultado_saida = mysqli_query($conn, $result_saida);