<?php
session_start();

include('conexao.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = ("SELECT usuario_id, usuario_nome, usuario_empresa_id FROM usuarios 
WHERE usuario_nome = '$usuario' AND usuario_senha = '$senha'");

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
$usuario = $result->fetch_assoc();




/*$QR = ("SELECT usuario_empresa_id FROM usuarios WHERE usuario_nome = '$usuario' AND usuario_senha = '$senha'");
$result_qr = mysqli_query($conn, $QR);

var_dump($result_qr);
exit();*/
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario['usuario_nome'];
	$_SESSION['idempresa'] = $usuario['usuario_empresa_id'];
	header('Location: painel.php');
	
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}

	



?>

