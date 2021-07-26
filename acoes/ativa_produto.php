<html>
<meta http-equiv="refresh" content="0; url=../produtos.php">
</html>

<?php


include("../conexao.php");


$idproduto = intval($_GET['produto']);


$sql_code = "UPDATE produtos SET produto_status = 'A' WHERE produto_id = '$idproduto'";
$sql_query = mysqli_query($conn, $sql_code);
	
	?>