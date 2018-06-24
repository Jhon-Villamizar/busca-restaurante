<!DOCTYPE html>
<html>
<head>
	<title>Busca Restaurante!</title>
	<?php include("incluidos/css.php"); ?>
</head>
	<body>
		<header class="bienvenida">
			<h1>Busca Restaurante<br>¡Bienvenidos!</h1>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center ">
					
					<div class="botones-inicio">
						<a href="ranking.php" id="menu">
						<button type="button" class="btn btn-outline-light btn-inicio tabla1">Ranking</button>
						</a>
						<a href="restaurantes.php" id="tipo">
						<button type="button" class="btn btn-outline-light btn-inicio tabla1">Restaurantes</button>
						</a>
					</div>
					
					<p>
						<div id="capadatos"></div>
					</p>
				</div>
			</div>
		</div>
	</body>
<?php
include("incluidos/js.php"); ?>

</html>
