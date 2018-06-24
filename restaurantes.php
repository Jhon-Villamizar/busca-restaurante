<?php 

// incluir la clase, instancias e invocar la funcion listar
include("clases/restaurantes.php");
$clase=new Restaurantes;
if (isset($_GET['id'])) {
	$mensaje=$clase->eliminar();
}
$datos=$clase->listar();
?>
<html>
<head>
	<title>Restaurantes</title>
	<?php include("incluidos/css.php");?>
</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Restaurantes</li>
  </ol>
</nav>
<br>
<header class="bienvenida">
	<h1>Restaurantes</h1>
</header>
	<div class="container">
		<div class="row">
			<div class="tipos mb-3">
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="carnes.php">
				<img class="card-img-top" src="http://asadacho.com/wp-content/uploads/2015/01/asado-parrilla.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Carnes</h5>
					<p class="card-text">Restaurantes especializados en carnes y preparaciones a la parrilla.</p>
				</div>
				</a>
			</div>
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="http://www.elattelier.com/wp-content/uploads/2015/04/sukiyaki.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Asiatica</h5>
					<p class="card-text">Restaurantes especializados en comida asiatica .</p>
					<br>
				</div>
				</a>
			</div>
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="http://www.puraitalia.com/wp-content/uploads/2015/06/vinitos.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Italiano</h5>
					<p class="card-text">Restaurantes especializados en pastas, quesos y vinos.</p>
					<br>
				</div>
				</a>
			</div>
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8IZzp-oKrw2MHleBV8J5wBvwYABz6K39SYxKdFp4cfaRic77EjQ" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Mexicano</h5>
					<p class="card-text">Restaurantes especializados en recetas mexicanas.</p>
					<br>
				</div>
				</a>
			</div>
		
			
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#" class="">
				<img class="card-img-top" src="http://buenomuybueno.com/wp-content/uploads/2017/04/shutterstock_270666803-1.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">De Mar</h5>
					<p class="card-text">Restaurantes especializados en los frutos del mar.</p>
					<br>
				</div>
				</a>
			</div>
			
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="http://hablemosdeculturas.com/wp-content/uploads/2017/11/comida-tipica-de-colombia-3-1024x576.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Tipica</h5>
					<p class="card-text">Restaurantes especializados en recetas de diferentes departamentos del pais.</p>
				</div>
				</a>
			</div>
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="http://www.cocinayvino.com/wp-content/uploads/2017/01/comidarapida.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Comida Rapida</h5>
					<p class="card-text">Restaurantes especializados en recetas rapidas y de variedad.</p>
					<br>
				</div>
				</a>
			</div>
			<div class="card col-xl-3 col-lg-4 col-md-5 col-xs-3">
				<a href="#">
				<img class="card-img-top" src="http://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/03/recetas-con-cafe-helado.jpg" alt="Card image cap" style="height: 200px">
				<div class="card-body">
					<h5 class="card-title">Cafés</h5>
					<p class="card-text">Lugares amenos para tomar alimentos livianos acompañados de cafe.</p>
					<br>
				</div>
				</a>
			</div>
		</div>
	</div>
<?php include ("incluidos/js.php");?>
<script type="text/javascript">
	$(document).ready( function () {
    $('#tablarestaurantes').DataTable(

    		{
    			"language" : 
	    			{
	    				"url" : "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
	    			}
    		}

    	);
	} );
</script>
</body>
</html>
