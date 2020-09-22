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

}
	


