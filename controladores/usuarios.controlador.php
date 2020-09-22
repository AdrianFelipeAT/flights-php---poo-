<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["codigo"])){
			$tabla = "codigos";

			$item = "codigoacceso";
			$valor = $_POST["codigo"];
			$codeadm = 1;

			$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);


			if($respuesta["codigoacceso"] == $_POST["codigo"]){

				if($respuesta["generado"] == 0){

					$_SESSION["iniciarSesion"] = "ok";
					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["codigoacceso"] = $respuesta["codigoacceso"];
					$_SESSION["codigoseta"] = $respuesta["codigoseta"];
					$_SESSION["generado"] = $respuesta["generado"];

					/*=============================================
					REGISTRAR ACCESO DEL CÓDIGO
					=============================================*/

					$item1 = "generado";
					$valor1 = 1;

					$item2 = "id";
					$valor2 = $respuesta["id"];

					//$AccesoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

					if($respuesta['id'] != $codeadm){

						echo '<script>

							window.location = "inicio";

						</script>';

					}elseif ($respuesta['id'] == $codeadm) {
						echo '<script>

							window.location = "tb76t7b6d2dg0a";

						</script>';
					}			
					
				}else{

					echo '<br>
						<div class="alert alert-danger">Este código ya fue usado</div>';

				}		

			}else{

				echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

			}

		}

	}

	/*=============================================
	Terminar Sesion
	=============================================*/

	static public function ctrTerminarSesion($item, $valor){

		$tabla = "codigos";

		$respuesta = ModeloUsuarios::MdlTerminarSesion($tabla, $item, $valor);

		return $respuesta;
	}


	/*=============================================
	Actualización de datos de cliente estrella
	=============================================*/

	static public function ctrActualizacionDatos(){

		if(isset($_POST["nombres"]) and isset($_POST["apellidos"]) and isset($_POST["celular"]) and isset($_POST["cedula"]) and isset($_POST["municipio"])){

			$tabla = "cliente";

			$identificacion = $_POST["identificacion"];
			$nombres = $_POST["nombres"];
			$apellidos = $_POST["apellidos"];
			$celular = $_POST["celular"];
			$municipio = $_POST["municipio"];
			if(isset($_POST["email"])){
				$correo_electronico = $_POST["email"];
			}else{
				$correo_electronico = '';
			}

			$respuesta = ModeloUsuarios::mdlActualizarDatosUsuario($tabla, $identificacion, $nombres, $apellidos, $celular, $municipio, $correo_electronico);

			if($respuesta == 'ok'){
				$respuestas = ModeloUsuarios::mdlConsultaCodigoSeta($_SESSION["codigoacceso"]);
				echo '<br>
						<div class="alert alert-success">Con el siguiente código puedes reclamar tu premio en un punto de venta: '.$respuestas["codigoseta"].'</div>';	

			}else{

				echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

			}
		}
		
	}

}
	


