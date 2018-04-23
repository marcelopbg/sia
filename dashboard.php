<?php
	session_start();

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">SIA <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
          <a href="dashboard.php?logout=confirmar" class="btn btn-outline-danger">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</nav>
	<form action="cadastramovimento.php" method="post">
		<?php
		$dbh = new PDO('mysql:host=localhost;dbname=SIA', "localhost","guimaraes1");

		$select = $dbh->query("SELECT * FROM produto");
		$result = $select->fetch(PDO::FETCH_OBJ);
echo $result->descricao;

		?>
		
		<option>
			
		</option>
	</form>

	</body>
</html>

	


	 <?php /*if(isset($_SESSION['administrador'])): ?>



<?php
else:
	echo("usuario pobre!!!!
	<a href='dashboard.php?logout=confirmar'>Sair</a>
");
endif;*/
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"index.php\">Clique aqui para voltar</a>";
	endif;

?>
