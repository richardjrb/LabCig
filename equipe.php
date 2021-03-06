<!DOCTYPE html>
<html>
	<head>
		<title>Equipe LabCig</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/equipe.css">
	</head>
	<body>
	<div class="container-fluid">
		<header class="col-md-offset-1 col-md-10 header">
			<br><br>
			<a href="index.php">
				<img src="img/labcig.png" class=" col-md-3 logo">
			</a>

			<div class="col-md-8 menuLi">
				<br><br>
				<ul class="col-md-12 menu">
					<a href="index.php"> <li class="col-md-3 menuLi">Home</li> </a>
					<a href="equipe.php"> <li class="col-md-3 menuLi">Equipe</li> </a>
					<a href="downloads.php"> <li class="col-md-3 menuLi">Downloads</li> </a>
					<a href="contato.php"> <li class="col-md-3 menuLi">Contato</li> </a>
				</ul>
			</div>
		</header>	
		<div class ="col-md-offset-2 col-md-8 diferente" >
		<h3>Email dos professores: </h3>
			<ul class="list-group" id="listaEquipe">
				<?php
					require('conecta.php');

					$sql = "SELECT nome,email,link FROM equipe ORDER BY nome";
					$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
					while($registro = mysqli_fetch_array($resultado)){
						$nome = $registro[0];
						$email = $registro[1];
						$link = $registro[2];
						echo "
							<li class=\"list-group-item\"><span class=\"badge\">$email</span><a href=\"$link\" target=\"blank\">$nome</a></li>";
					}
				?>
			</ul>
		</div>




	<!-- RODAPÉ -->
	<div class="footer">
		<footer class="col-md-offset-2 col-md-8">
		<br>
			<p>
				Direitos reservados© 2016 LABCIG | Universidade Federal de Santa Catarina - UFSC
			</p>
		</footer>
	</div>
	</div>
	<!-- FIM RODAPÉ -->
	</body>
</html>
