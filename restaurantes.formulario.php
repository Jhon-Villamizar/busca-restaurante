<?php 
include("sessiones.php");
// si se envia el parametro id, quiere decir que se va a generar el proceso de modificacion
// para este fin se necesita que en la clase restaurantes se pueda extraer
// la informacion y mostrarla en cada campo del formulario
include("clases/restaurantes.php");
$clase=new Restaurantes;
if (isset($_REQUEST['id'])) {
	$detalle=$clase->detalle();
	if (count($detalle)<=0) {
		die ("Proceso no permitido");
		exit();
	}
}
?>
<html>
<head>
	<title>Buscar Restaurantes</title>
	<?php include("incluidos/css.php");?>
	</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
	 <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
	 <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
	 <li class="breadcrumb-item"><a href="adminres.php">Administrador de Restaurantes</a></li>
    
    <li class="breadcrumb-item" aria-current="page">Modificacion de registro</li>
  </ol>
</nav>
<br>

<header class="bienvenida">
	<h1>Modificacion de Registro</h1>
</header>
<div class="container">
	<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<div class="tabla1">

			<form action="" method="post" name="frm" id="frm">
			
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
			  </div>
			  <input type="text" class="form-control" placeholder="" aria-label="text" autocomplete="off" aria-describedby="basic-addon1" name="id" id="id" readonly value="<?php if (isset($detalle)) echo $detalle["id"]?>">
			</div>		
			

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
			  </div>
			  <input type="text" class="form-control" placeholder="Nombre" aria-label="text" autocomplete="off" aria-describedby="basic-addon1" name="nombre" id="nombre" required maxlength="60" value="<?php if (isset($detalle)) echo $detalle["nombre"]?>">
			</div>			
			

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
			  </div>
			  <input type="phone" class="form-control" placeholder="Telefono" aria-label="number" autocomplete="off" aria-describedby="basic-addon1" name="telefono" id="telefono" required maxlength="60" value="<?php if (isset($detalle)) echo $detalle["telefono"]?>">
			</div>
			

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
			  </div>
			  <input type="adreess" class="form-control" placeholder="Direccion" aria-label="text" autocomplete="off" aria-describedby="basic-addon1" name="direccion" id="direccion" required maxlength="200" value="<?php if (isset($detalle)) echo $detalle["direccion"]?>">
			</div>
			

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"><i class="fab fa-wordpress"></i></span>
			  </div>
			  <input type="web" class="form-control" placeholder="Pagina Web" aria-label="text" autocomplete="off" aria-describedby="basic-addon1" name="web" id="web" required maxlength="200" value="<?php if (isset($detalle)) echo $detalle["web"]?>">
			</div>
			

			<div class="botones">
				<button class="btn btn-outline-light btn-guardar" type="submit" name="boton" id="boton">Guardar</button> 
				<a href="adminres.php" class="btn btn-outline-light text-left btn-regresar" type="boton" name="boton" id="boton">Regresar</a>
			</div>
		</form>
	</div>

	</div>
	<div class="col-lg-3"></div>
	</div>

	
	</div>
		<div id="capadatos"></div>
	<p></p>

<?php include ("incluidos/js.php");?>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	$("#frm").submit(function(event) {
		event.preventDefault();
		$.ajax({
			url:"restaurantes.procesos.php",
			data: $("#frm").serialize(), 
			type:"post",
			beforeSend: function() { // aca es previo al proceso
				$("#capadatos").html("Cargando Datos Un momento por favor...");			
			},
			error: function (jqXHR, textStatus, errorThrown) { 
					$("#capadatos").html("Ha ocurrido un error: "+errorThrown+" , "+textStatus);
			},
			success: function (response) { // se espera el response
				$("#capadatos").html(response);
			}
		});	
	});
});
</script>

