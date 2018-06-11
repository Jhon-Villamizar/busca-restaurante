<?php
/* 
script que se usara para las operaciones cno el usuario en modo C(create) R(read) U(pdate) D)elete) 

	- leer registros
	- modificar registros
	- crear registros
	- eliminar registros

que esta clase hereda la conexion para no estar invocandola cada que se necesite
*/
include("conexion.php");
class Usuarios extends Conexion {

	/*
	si se necestan utilizar variables para todo la clase 
	o instancias metodos u operaciones se invoca el metodo constuctor 
	*/
	function __construct(){
		// para que se conserve el metodo constructor que se hereda de otra clase, se invoca parent
		parent:: __construct();
		$this->tabla="tblusuarios";
		
	}

	/* 
	Esta funcion permite validar si un usuario se encuentra o si hay un registro asociado
	al correo o clave que se ingresan desde el login.php. Los datos que devuelva la consula
	se pasan a un vector
	*/
	function validar() {
		// construir el query
		$sql=" select * from ".$this->tabla." where correo='".$_POST["usuario"]."'";
		$sql.=" and clave=sha1('".$_POST["clave"]."')";
		// crear la variable que me permite devolver los registros
		$registros=array();
		// ejecutar el query usando this->conexion
		if ($this->conexion->query($sql)) {
			// la ejecucion se almacena en una variable
			$resultado=$this->conexion->query($sql);
			// extraer de resultado los campos que vienen del query
			$registros=$resultado->fetch_array();
		} else {
			echo "Se presento un problema con el query: ".$sql;
			
		}
		return $registros;
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// funcion que liste todos los registro
	function listar(){
		$sql=" select * from ".$this->tabla." ";
		// crear la variable que me permite devolver los registros
		$registros=array();
		if ($this->conexion->query($sql)) {
			$resultado=$this->conexion->query($sql);
			// como son todos los registros se debe recorrer cada fila de registros y guardarlos en el vector que se tiene instanciado llamado $registros
			while ($fila=$resultado->fetch_array()) {
				$registros[]=$fila;
			}
		} else {
			echo "Se presento un problema con el query: ".$sql;
		}
		return $registros;
	}

	

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	//ingresar nuevo dato a bd
	function ingresar() {
		// validar si el registro existe
		$sql="select * from ".$this->tabla." where correo='".$_POST['correo']."'";	
		if ($this->conexion->query($sql)) {
			// validar si hay  un registro encontrado
			// usando num_rows
			$resultado=$this->conexion->query($sql);
			if ($resultado->num_rows>0) {
				echo "<span class='alert alert-warning'>El correo ya existe previamente. Intente de nuevo cambiandolo</span>";
			} else {
				// proceso de insercion
				$sql="
				INSERT INTO ".$this->tabla." (`id`, `nombre`, `correo`, `clave`) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['correo']."', '');

				";
				if ($this->conexion->query($sql)) {
					echo "<span class='alert alert-success'>Registro ingresado con exito</span>";
				} else {
					echo "<span class='alert alert-danger'>El proceso de insercion no se puede realizar</span>";
				}	
			}
		} else {
			echo "<span class='alert alert-danger'>No se puede realizar la operacion.</span> ";
		}		
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function detalle(){
		$id=$_REQUEST['id']; // este tipo de super global recibe parametros tanto en GET como en POST. Solamente se recomienda usar cuando no se sea claro el transporte de los datos
		$sql="select  * from ".$this->tabla." where id=".$id;
		$registros=array();
		if ($this->conexion->query($sql)) {
			$resultado=$this->conexion->query($sql);
			$registros=$resultado->fetch_array();
		} else {
			echo "Se presento un problema con el query: ";
			
		}
		return $registros;

	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	//  la siguiente funcion permite modificar registros
	function modificar() {
		$sql=" update ".$this->tabla." set ";
		$sql.=" nombre='".$_POST['nombre']."'";
		$sql.=",correo='".$_POST['correo']."'";
		$sql.=" where id=".$_POST['id'];

		if ($this->conexion->query($sql)) {
			$registros="Modificacion realizada con exito";

		} else {
			$registros="Se presento un problema con el query: ".$this->conexion->error;
		}
		return $registros;
	} 
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// la siguiente funcion permite eliminar
	// la condicion es que solo se va activar esa funcion
	// si se pasa el id del registro en modo GET
	function eliminar(){
			

			$sql=" delete from ".$this->tabla." where id=".$_GET['id'];
			if ($this->conexion->query($sql)) {
				$registros="Elminacion realizada con exito";
			} else {
				$registros="Se presento un problema con el query: ".$this->conexion->error;
			}
			return $registros;

	}
	
}



?>