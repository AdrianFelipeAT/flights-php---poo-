<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["codigo"])){
			$tabla = "codigo";

			$item = "codigo";
			$valor = $_POST["codigo"];
			$codeadm = 10001;

			$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);



			if($respuesta["codigo"] == $_POST["codigo"] and $respuesta["vendido"] == 1 ){

				if($respuesta["n_ingreso"] == 0){

					$_SESSION["iniciarSesion"] = "ok";
					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["codigo"] = $respuesta["codigo"];
					$_SESSION["n_ingreso"] = $respuesta["n_ingreso"];

					/*=============================================
					REGISTRAR ACCESO DEL CÓDIGO
					=============================================*/

					$item1 = "n_ingreso";
					$valor1 = 1;

					$item2 = "id";
					$valor2 = $respuesta["id"];

					$AccesoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

					if($AccesoLogin == "ok" and $respuesta['id'] != $codeadm){

						echo '<script>

							window.location = "inicio";

						</script>';

					}elseif ($AccesoLogin == "ok" and $respuesta['id'] == $codeadm) {
						echo '<script>

							window.location = "tb76t7b6d2dg0a";

						</script>';
					}			
					
				}else{

					echo '<br>
						<div class="alert alert-danger">Este código está en uso</div>';

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

		$tabla = "codigo";

		$respuesta = ModeloUsuarios::MdlTerminarSesion($tabla, $item, $valor);

		return $respuesta;
	}

}
	


