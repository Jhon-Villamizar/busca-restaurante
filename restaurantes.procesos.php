<?php 
/* 
Este script permite recibir los parametros enviados y tomar la siguiente decision:
1. si el id viene vacio quiere decir que vamos a ingresar
2. si el id es diferente de vacio quiere decir que vamos a modificar
// insercion: validamos que el registro existo a no
// 1.1. Si el registro existe, devolver "No se puede ingresar porque el correo ya esta creado en el sistema"
// 1.2. Si el registro no existe, validar la insercion y devolver "Registro ingresado con exito"
// Modificacion
// 2. si se modifica, enviar mensaje "Datos modificados" y si se presenta error , enviar "no se puede modificar, intente de nuevo "
Para que esto funcione, se usara la clase de usuarios y dos funciones nuevas: ingresar y modificar
*/
include("clases/restaurantes.php");
$clase=new Restaurantes;
if ($_POST['id']<>"") {
	$respuesta=$clase->modificar();
} else {
	$respuesta=$clase->ingresar();
}
echo $respuesta;
?>