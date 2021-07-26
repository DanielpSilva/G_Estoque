<html>
<meta http-equiv="refresh" content="0; url=fornecedores.php">
</html>


<?php
session_start();
	include_once("conexao.php");
	
	$empresa = $_SESSION['idempresa'];
	
	
	/*  */
	
	$cep      = mysqli_real_escape_string($conn, $_POST['cep']);
	$endereco = mysqli_real_escape_string($conn, $_POST['rua']);
	$bairro   = mysqli_real_escape_string($conn, $_POST['bairro']);
	$cidade   = mysqli_real_escape_string($conn, $_POST['cidade']);
	$estado   = mysqli_real_escape_string($conn, $_POST['uf']);
    $nome     = mysqli_real_escape_string($conn, $_POST['nome']);
    $razao    = mysqli_real_escape_string($conn, $_POST['razao']);
	$cnpj     = mysqli_real_escape_string($conn, $_POST['cnpj']);
	$numero   = mysqli_real_escape_string($conn, $_POST['numero']);
	$email    = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	
	
	
	$result_fornecedor = "INSERT INTO fornecedores (
        fornecedor_nome,
        fornecedor_razao,
        fornecedor_cnpj,
        fornecedor_email,
        fornecedor_telefone,
		fornecedor_cep, 
		fornecedor_rua,
		fornecedor_numero,
		fornecedor_bairro, 
		fornecedor_cidade, 
		fornecedor_estado_sigla,
		fornecedor_empresa_id
        
		) VALUES (
        '$nome',
        '$razao',
        '$cnpj',
        '$email',
        '$telefone',
		'$cep', 
		'$endereco',
		'$numero', 
		'$bairro', 
		'$cidade', 
		'$estado',
		'$empresa'
        )";
    $resultado_fornecedor = mysqli_query($conn, $result_fornecedor);
	
?>
	