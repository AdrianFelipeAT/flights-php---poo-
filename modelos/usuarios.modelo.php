<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*============================================================
	SE CONSULTA EL CÓDIGO SETA DE UN USUARIO PARA RECLAMAR PREMIO
	==============================================================*/

	static public function mdlConsultaCodigoSeta($codigoacceso){
		if($codigoacceso != null){

			$stmt = Conexion::conectar()->prepare("SELECT codigoseta FROM codigos WHERE codigoacceso = '$codigoacceso'");

			$stmt -> execute();

			return $stmt -> fetch();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlTerminarSesion($tabla, $item, $valor){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET generado = 0 WHERE $item = $valor");


		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	Obtener Premio	
	=============================================*/

	static public function mdlObtenerPremio($tabla, $item){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE codigoacceso= :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}
		

		$stmt -> close();

		$stmt = null;

	}
	/*========================================================
	ACTUALIZAR DATOS DE USUARIO ( INCERSIÓN EN BASE DE DATOS )
	==========================================================*/

	static public function mdlActualizarDatosUsuario($tabla, $identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $celular, $municipio, $fecha_nacimiento, $correo_electronico, $bono, $condiciones, $id_codigo){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, correo_electronico, municipio_residencia, fecha_nacimiento, acepto_politica, acepto_regalo, id_codigo) VALUES ('$identificacion', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$celular', '$correo_electronico', '$municipio', '$fecha_nacimiento', '$condiciones', '$bono', $id_codigo)");

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}