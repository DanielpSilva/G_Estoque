<?php
session_start();
include("verifica_login.php");
include("conexao.php");


	$empresa = $_SESSION['idempresa'];
	
	$consulta = "SELECT deposito_id, deposito_nome FROM depositos WHERE deposito_empresa_id ='$empresa'";
	$query = mysqli_query($conn, $consulta);
?>

<h2>OLÁ, <?php echo $_SESSION['usuario'];?></h2></br>

<a href="painel.php">Painel</a></br>

<h2><a href="logout.php"> Sair</a></h2>

<html>
<head>

</head>
<body>

<a href="deposito.php"> deposito </a></br>

<a href = "fornecedores.php"> fornecedores  </a> </br>
<a href = "unidades.php"> unidades  </a> </br>
<a href = "produtos.php"> produtos  </a> </br>
<a href = "estoque.php"> estoque  </a> </br>
<a href = "entradas.php"> entradas  </a> </br>
<a href = "saidas.php"> saidas  </a> </br>
 </br>

<form method="Post" action="processa_deposito.php">

<label>Nome do Deposito :
<input name="deposito" type="text" id="deposito">
</label><br/>
<input type="submit" value="Cadastrar">

</form>

	<table border="1">

		<tr>
			<td>ID</td>
			<td>Nome do deposito</td>
			
		
		</tr>
		<?php while($dado = $query->fetch_array()){ ?>
		<tr>
			<td><?php echo $dado['deposito_id'] ?></td>
			<td><?php echo $dado['deposito_nome'] ?></td>
			
		</tr>
		<?php } ?>


	</table>



</body>

</html>