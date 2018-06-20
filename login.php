<!doctype html>
<html>
<head>
	<title>Ingreso al sistema</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include("incluidos/css.php");?>
	</head>
<body>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page">Administradores</li>
		</ol>
	</nav>
	<br>
	<header class="bienvenida">
		<h1>Formulario de acceso</h1>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 tabla1">

				<br>
				<form action="validar.php" method="post" name="frm" id="frm">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
						</div>
							<input type="email" class="form-control" placeholder="Digite su usuario" aria-label="Username" autocomplete="off" aria-describedby="basic-addon1" name="usuario" required maxlength="60">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
						</div>
							<input type="password" class="form-control" placeholder="Clave" aria-label="Password" autocomplete="off" aria-describedby="basic-addon1" name="clave" required maxlength="60">
					</div>
					<div>
						<button type="submit" class="btn btn-outline-light btn-entrar" name="boton" id="boton">Entrar</button> 
					</div>
				</form>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>

<?php include ("incluidos/js.php");?>
</body>
</html>
