<?php 
include("sessiones.php");
?>
<html>
<head>
	<title>Busca Restaurante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include("incluidos/css.php");?>
	</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Principal</li>

  </ol>
</nav>
<header>
  <h1>Agrega Nuevos o Modifica <br> Restaurantes</h1>
</header>
<div class="container">
	<div class="row">
	
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="card w-100">
        <div class="card-header bg-warning">
          Administrador 
        </div>
      <div class="card-body">
        <h5 class="card-title">Administra los Restaurantes</h5>
        <p class="card-text">Permite administrar los restaurantes del sistema</p>
        <a href="adminres.php" class="btn btn-outline-light">Ir a lista</a>
      </div>
      </div>
	 </div>
   <div class="col-lg-3"></div>
   </div>
</div>




<?php include ("incluidos/js.php");?>
</body>
</html>
