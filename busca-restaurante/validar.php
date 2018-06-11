<?php
session_start(); // se inicializa para comparar crear y eliminar variables de session
/* 
Script que permite validar el acceso al sistema
	
	- Se valida que se pasen datos desde un formulario
	- se carga la conexion a la base de datos por medio de una clase
	- se valida si se encuentra en la tabla usuarios
	- si se encuentra cargar las variables de session
	- en caso contrario lo devuelve al login.php
*/

// 1. validar si se pasan valores en el metodo POST
//print_r($_POST); // $_POST, $_GET, $_SESSION, $_REQUEST, $_ENV son las que se conocen super globlales que se pueden utuilizar en funcion, clases sin necesidad instanciarlas 	
// recuperar los valores de las variables que necesitamos para loguearnos
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
if ($usuario<>"" && $clave<>"" && strlen($usuario)<=60 && strlen($clave)<=60) {
	// instancia la clase usuarios
	include("clases/usuarios.php");
	$clase=new Usuarios;
	// llamar la funcion validar y como devuelve un vector, almacenarla en una variable
	// para leer e interpretar el resultado
	$datos=$clase->validar();
		if (count($datos)>0) {
			// encuentra datos, instancia las variables de session que vamos a comparar
			$_SESSION['dsnombre']=$datos["nombre"];
			$_SESSION['idusuario']=$datos["id"];
			// enviarlo a la principal.php
			header("Location: principal.php");
			
		} else {
		// devolverlo
		header("Location: login.php");
		}

} else {
	// devolverlo
	header("Location: login.php");
}

?>