<html>
<meta http-equiv="refresh" content="0; url=unidades.php">
</html>

<?php
session_start();
include('conexao.php');

$empresa = $_SESSION['idempresa'];


$unidade = mysqli_real_escape_string($conn, $_POST['unidade']);

$result_unidade = ("INSERT INTO `unidades`
	(`unidade_nome`, 
	`unidade_empresa_id`) 
	VALUES (
	'$unidade',
	'$empresa')");
	
$resultado_unidade = mysqli_query($conn, $result_unidade);

$idunidade = ("SELECT `unidade_id` FROM `unidades` WHERE unidade_empresa_id = '$empresa'");
$unidadeqr = mysqli_query($conn, $idunidade);
$unrow = mysqli_num_rows($unidadeqr);
$id = $unidadeqr->fetch_assoc();;

if($unrow == 1 ){
	$_SESSION['id_unidade'] = $id['unidade_id'];
}

$unidadeid = $_SESSION['id_unidade'];









?>