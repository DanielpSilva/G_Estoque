<html>
<meta http-equiv="refresh" content="0; url=entradas.php">
</html>


<?php
include('conexao.php');
	session_start();
	$empresa = $_SESSION['idempresa'];
	//$unidade = $_SESSION['id_unidade'];
	
	
	$fornecedor   = mysqli_real_escape_string($conn, $_POST['fornecedor']);
	$deposito = mysqli_real_escape_string($conn, $_POST['deposito']);
	$data   = mysqli_real_escape_string($conn, $_POST['data']);
	$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
	$produto = mysqli_real_escape_string($conn, $_POST['produto']);
	$valorU = mysqli_real_escape_string($conn, $_POST['valor']);
	$valorT = mysqli_real_escape_string($conn, $_POST['valortotal']);
	$total = mysqli_real_escape_string($conn, $_POST['total']);
	
	$result_entrada = "INSERT INTO `entradas`
	(`entrada_empresa_id`, 
	`entrada_fornecedor_id`, 
	`entrada_deposito_id`, 
	`entrada_data`, 
	`entrada_quantidade`, 
	`entrada_produto_id`, 
	`entrada_valor_unitario`, 
	`entrada_valor_total`, 
	`entrada_total`) 
	VALUES 
	('$empresa',
	 '$fornecedor',
	 '$deposito',
	 '$data',
	 '$quantidade',
	 '$produto',
	 '$valorU',
	 '$valorT',
	 '$valorT')";
	
	$resultado_entrada = mysqli_query($conn, $result_entrada);
	
	



?>