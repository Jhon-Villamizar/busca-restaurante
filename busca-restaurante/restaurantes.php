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
	<title>Listado de Restaurantes</title>
	<?php include("incluidos/css.php");?>
	</head>
<body>

	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
	 <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listado de Restaurantes</li>
  </ol>
</nav>
<br>
<header>
	<h1>Lista de Restaurantes</h1>
</header>
	<div class="container">
		<div class="tabla1">
			
				<table width="100%" id="tablarestaurantes" class="display">
					<thead>
						<tr class="bg-warning">
							<th>Id</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Pagina Web</th>
						</tr>
					</thead>	
					<tbody>
						<?php
						foreach ($datos as $filaregistro) {
						?>
						<tr align="left">
							<td><?php echo $filaregistro["id"];?></td>
							<td><?php echo $filaregistro["nombre"];?></td>
							<td><?php echo $filaregistro["telefono"];?></td>
							<td><?php echo $filaregistro["direccion"];?></td>
							<td><?php echo $filaregistro["web"];?></td>
							</tr>
						<?php 
						}
						?>
					</tbody>
				</table>
			
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
