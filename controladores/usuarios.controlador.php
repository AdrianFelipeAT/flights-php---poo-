<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){
		
		if(isset($_GET["codigo"])){
			$tabla = "codigos";

			$item = "codigoacceso";
			$valor = $_GET["codigo"];
			$codeadm = 1;

			$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

			if($respuesta["codigoacceso"] == $_GET["codigo"]){

				$_SESSION["iniciarSesion"] = "ok";
				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["codigoacceso"] = $respuesta["codigoacceso"];
				$_SESSION["codigoseta"] = $respuesta["codigoseta"];
				$_SESSION["id_bono_regalo"] = $respuesta["id_bono_regalo"];

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

				}		
				
			}else{

				echo '<script>

						window.location = "404";

					</script>';

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
		if(isset($_POST["nombre_completo"]) and isset($_POST["celular"]) and isset($_POST["identificacion"]) and isset($_POST["municipio"]) and isset($_POST["fecha_nacimiento"]) and isset($_POST["bono"]) and isset($_POST["condiciones"])){

			$tabla = "cliente";

			$nombre_completo = $_POST["nombre_completo"];
			$identificacion = $_POST["identificacion"];
			$celular = $_POST["celular"];
			$municipio = $_POST["municipio"];
			$fecha_nacimiento = $_POST["fecha_nacimiento"];
			$bono = $_POST["bono"];
			$condiciones = $_POST["condiciones"];
			if(isset($_POST["email"])){
				$correo_electronico = $_POST["email"];
			}else{
				$correo_electronico = '';
			}

			$respuesta = ModeloUsuarios::mdlActualizarDatosUsuario($tabla, $identificacion, $nombre_completo, $celular, $municipio, $fecha_nacimiento, $correo_electronico, $bono, $condiciones);

			if($respuesta == 'ok'){
				?>
				<script>
					var intro = document.getElementById('divinicial');
					intro.style.display = 'inline';
				</script>
				<?php
				echo "<script>
					</script>";
				echo '<br>
						<div class="alert alert-success">Formualrio enviado correctamente</div>';	

			}else{

				echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

			}
		}
		
	}

}
	


