<?php
/* 
script o clase que carga las variables de conexion a la base de datos. 
cuando se publica el proyecto en el servidor, es el archivo que se cambia antes de subirlo con los datos de configuracion de la base de datos en produccion
*/
/**
* 
*/
class Conexion {
	
	function __construct()
	{
		// en este espacio se instancias las variables de acceso a la base de datos 
		// y ademas se carga el conector hacia ella
		
		$this->servidor="localhost";
		$this->usuario="root";
		$this->clave="";
		$this->basededatos="proyectosis";

		// crear la conexion como una variable que se pueda utilizar en otras clases que heredan la conexion generada aqui
		$this->conexion=new mysqli($this->servidor,$this->usuario,$this->clave,$this->basededatos);
		// validar si se puede conectar. Si la conexion falla es recomendar para el proceso para revisar
		if ($this->conexion->connect_errno) {

			die("Fallo al conectar a la base de datos ".$this->conexion->connect_errno." ".$this->conexion->connect_error);

		}


	}
}
?>