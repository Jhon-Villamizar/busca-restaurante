<?php 
include("conexion.php");
class restaurantes extends Conexion {

	/*
	si se necestan utilizar variables para todo la clase 
	o instancias metodos u operaciones se invoca el metodo constuctor 
	*/
	function __construct(){
		// para que se conserve el metodo constructor que se hereda de otra clase, se invoca parent
		parent:: __construct();
		
		$this->tabla="restaurantes";
	}

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

	function ingresar() {
		// validar si el registro existe
		$sql="select * from ".$this->tabla." where nombre='".$_POST['nombre']."'";	
		if ($this->conexion->query($sql)) {
			// validar si hay  un registro encontrado
			// usando num_rows
			$resultado=$this->conexion->query($sql);
			if ($resultado->num_rows>0) {
				echo "<span class='alert alert-warning'>El nombre ya existe previamente. Intente de nuevo cambiandolo</span>";
			} else {
				// proceso de insercion
				$sql="
				INSERT INTO ".$this->tabla." (`id`, `nombre`, `telefono`, `direccion`,`web`) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['telefono']."', '".$_POST['direccion']."', '".$_POST['web']."');

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

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function modificar() {
		$sql=" update ".$this->tabla." set ";
		$sql.=" nombre='".$_POST['nombre']."'";
		$sql.=",telefono='".$_POST['telefono']."'";
		$sql.=",direccion='".$_POST['direccion']."'";
		$sql.=",web='".$_POST['web']."'";
		$sql.=" where id=".$_POST['id'];

		if ($this->conexion->query($sql)) {
			$registros="<span class='alert alert-success'>Modificacion realizada con exito</span>";

		} else {
			$registros="<span class='alert alert-danger'>Se presento un problema con el query: </span>".$this->conexion->error;
		}
		return $registros;
	} 

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	function eliminar(){
			

			$sql=" delete from ".$this->tabla." where id=".$_GET['id'];
			if ($this->conexion->query($sql)) {
				$registros="<span class='alert alert-danger'>Elminacion realizada con exito</span>";
			} else {
				$registros="<span class='alert alert-success'>Se presento un problema con el query: </span>".$this->conexion->error;
			}
			return $registros;

	}

}
 ?>