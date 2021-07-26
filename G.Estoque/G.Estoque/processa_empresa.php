<html>
<meta http-equiv="refresh" content="0; url=index.php">
</html>


<?php
	include_once("conexao.php");
	
	
	/* EMPRESAS */
	
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
	$usuario = mysqli_real_escape_string($conn, $_POST['nome_usu']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	


	$result_empresa = "INSERT INTO empresas (
        empresa_nome,
        empresa_razao,
        empresa_cnpj,
        empresa_email,
        empresa_telefone,
		empresa_cep, 
		empresa_rua,
		empresa_numero,
		empresa_bairro, 
		empresa_cidade, 
		empresa_estado_sigla
        
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
		'$estado'
        )";
    $resultado_empresa = mysqli_query($conn, $result_empresa); 
	
	$id_empresa = mysqli_insert_id($conn);
	
	
	
	$result_login = "INSERT INTO usuarios(
	usuario_nome,
	usuario_senha,
	usuario_empresa_id
	)VALUES (
	'$usuario',
	'$senha',
	'$id_empresa')";
	
	$resultado_login = mysqli_query($conn, $result_login);
	
	
	$empresa = $_SESSION['idempresa'];
	
	
?>