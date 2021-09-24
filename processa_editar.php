<html>
<meta http-equiv="refresh" content="0; url=editar.php">

</html>


<?php
include('conexao.php');
session_start();
$empresa = $_SESSION['idempresa'];
//$unidade = $_SESSION['id_unidade'];
$corMenu            = mysqli_real_escape_string($conn, $_POST['menu']);
$corBotao           = mysqli_real_escape_string($conn, $_POST['botao']);
$tabela             = mysqli_real_escape_string($conn, $_POST['tabela']);
$iconeDeposito      = mysqli_real_escape_string($conn, $_POST['deposito']);
$iconeFornecedores  = mysqli_real_escape_string($conn, $_POST['fornecedores']);
$iconeUnidades      = mysqli_real_escape_string($conn, $_POST['unidades']);
$iconeProdutos      = mysqli_real_escape_string($conn, $_POST['produtos']);
$iconeEstoque       = mysqli_real_escape_string($conn, $_POST['estoque']);
$iconeEntradas      = mysqli_real_escape_string($conn, $_POST['entradas']);
$iconeSaidas        = mysqli_real_escape_string($conn, $_POST['saidas']);


if (!isset($corMenu)) {
	$corMenu = null;
}
if (!isset($corBotao)) {
	$corBotao = null;
}
if (!isset($tabela)) {
	$tabela = null;
}
if (!isset($iconeDeposito)) {
	$iconeDeposito = null;
}
if (!isset($iconeFornecedores)) {
	$iconeFornecedores = null;
}
if (!isset($iconeUnidades)) {
	$iconeUnidades = null;
}
if (!isset($iconeProdutos)) {
	$iconeProdutos = null;
}
if (!isset($iconeEstoque)) {
	$iconeEstoque = null;
}
if (!isset($iconeEntradas)) {
	$iconeEntradas = null;
}
if (!isset($iconeSaidas)) {
	$iconeSaidas = null;
}

$idUsuario = "SELECT usuario_id FROM usuarios WHERE usuario_empresa_id  = '$empresa' LIMIT 1";
$idUsuario = mysqli_query($conn, $idUsuario);
if ($idUsuario = $idUsuario->fetch_array()) {
	$idUser =  $idUsuario['usuario_id'];
}

$consulta = "SELECT * FROM style WHERE empresa_id  ='$empresa'";
$query = mysqli_query($conn, $consulta);

if ($query->fetch_array() >= 1) {
	echo "Possui registro";
	$updateEditar = "UPDATE style 
        SET usuario_id = '$idUser',
        empresa_id = '$empresa',
        style_cor_menu = '$corMenu',
        style_cor_botoes = '$corBotao',
        style_cor_da_tabela = '$tabela',
		icone_deposito = '$iconeDeposito', 
		icone_fornecedores = '$iconeFornecedores',
		icone_unidade = '$iconeUnidades',
		icone_produto = '$iconeProdutos', 
		icone_estoque = '$iconeEstoque',
		icone_entradas = '$iconeEntradas',
		icone_saidas = '$iconeSaidas'
        WHERE empresa_id = '$empresa'
        ";
	//echo "$updateEditar";
	$resultado_updateEditar = mysqli_query($conn, $updateEditar) or die("Erro");
} else {
	echo "Não possui registro";
	$inserirEditar = "INSERT INTO style (
		usuario_id,
		empresa_id,
		style_cor_menu,
		style_cor_botoes,
		style_cor_da_tabela,
		icone_deposito, 
		icone_fornecedores,
		icone_unidade,
		icone_produto, 
		icone_estoque,
		icone_entradas,
		icone_saidas
        
		) VALUES (
        '$idUser',
        '$empresa',
        '$corMenu',
        '$corBotao',
        '$tabela',
        '$iconeDeposito',
        '$iconeFornecedores',
        '$iconeUnidades',
        '$iconeProdutos',
        '$iconeEstoque',
        '$iconeEntradas',
        '$iconeSaidas'
        )";
	//echo "$inserirEditar";
	$resultado_inserirEditar = mysqli_query($conn, $inserirEditar) or die("Erro");
}
?>