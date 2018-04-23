<?php
	session_start();

	require_once "classes/Conexao.class.php";
	require_once "classes/Usuario.class.php";

	if (isset($_POST['ok'])):

		$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

		$l = new Login;
		$l->setLogin($login);
		$l->setSenha($senha);

		if($l->logar()):
			header("Location: dashboard.php");
		else:
			$erro = "Erro ao logar";
		endif;
	endif;


	if(isset($_SESSION['logado'])):
		header("Location: dashboard.php");
	else:
?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Titulo</title>
		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css"> 
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="container">
				<div class="card">
		<div id="login" align="center">
			<form action="" method="POST" class="formulario">
				<div class="login">Login</div>
				<input type="text" name="login">
				<div class="senha">Senha</div>
				<input type="password" name="senha"><br><br>
				<input type="submit" name="ok" value="Logar" class="btn btn-info">
			</form>
			<?php echo isset($erro) ? $erro : ''; ?>
		</div>		
</div>
</div>
</div>

<?php
	endif;
?>

	</body>
</html>
