<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>G. Estoque</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/favico.png"/><a style="visibility: hidden;">;</a>
	
</head>

<body style="background-image: linear-gradient(to left, #009688, #3F51B5);">
	
	<form method="post" action="login.php" id="formlogin" name="formlogin"  >
	<div class="login-box">
		<h1>Login</h1>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Usuário" name = "usuario" id = "usuario" required>
		</div>
		
		<div class="textbox">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Senha" name="senha" id="senha" required>
		</div>
		<input type="submit" class="btn" value="LOGAR" >

		<p>Ainda não possui uma conta? <a href="empresa.php">Cadastre-se aqui</a></p>
	</div>
	</form>
</body>

</html>