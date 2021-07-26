<html>
<meta http-equiv="refresh" content="0; url=produtos.php">
</html>


<?php
include('conexao.php');
	session_start();
	$empresa = $_SESSION['idempresa'];
	//$unidade = $_SESSION['id_unidade'];
	
	

	$codigo = mysqli_real_escape_string($conn, $_POST['codigo']);
	$nome   = mysqli_real_escape_string($conn, $_POST['nome']);
	$unidade = mysqli_real_escape_string($conn, $_POST['unidade']);
	
	$result_produtos = ("INSERT INTO `produtos`
	(
	`produto_codigo`, 
	`produto_nome`,
	`produto_unidade_id`,
	`produto_empresa_id`) 
	VALUES 
	(
	 '$codigo',
	 '$nome',
	 '$unidade',
	 '$empresa')");
	
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	



?>