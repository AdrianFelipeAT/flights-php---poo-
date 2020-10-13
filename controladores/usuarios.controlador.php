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

			$respuesta = ModeloUsuarios::MdlMostrarCodigos($valor);

			if($respuesta["codigoacceso"] == $_GET["codigo"]){

				$_SESSION["iniciarSesion"] = "ok";
				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["codigoacceso"] = $respuesta["codigoacceso"];
				$_SESSION["codigoseta"] = $respuesta["codigoseta"];
				$_SESSION["id_bono_regalo"] = $respuesta["id_bono_regalo"];
				$_SESSION["popup"] = $respuesta["popup_imagen"];
				$_SESSION["fondo"] = $respuesta["fondo_imagen"];			
				$_SESSION["id_producto"] = $respuesta["id_producto_f"];			
				
				echo '<script>

					window.location = "inicio";

				</script>';

						
				
			}else{

				echo '<script>

						window.location = "404";

					</script>';

			}

		}



	}


	/*=============================================
	Actualización de datos de cliente estrella
	=============================================*/

	static public function ctrActualizacionDatos(){
		if(isset($_POST["primer_nombre"]) and isset($_POST["primer_apellido"]) and isset($_POST["celular"]) and isset($_POST["identificacion"]) and isset($_POST["municipio"]) and isset($_POST["fecha_nacimiento"]) and isset($_POST["direccion"]) and isset($_POST["bono"]) and isset($_POST["condiciones"])){

			$tabla = "cliente";
			$tablacodigo = 'codigos';

			$primer_nombre = $_POST["primer_nombre"];
			if(isset($_POST["segundo_nombre"])){
				$segundo_nombre = $_POST["segundo_nombre"];
			}else{
				$segundo_nombre = '';
			}
			$primer_apellido = $_POST["primer_apellido"];
			if(isset($_POST["segundo_apellido"])){
				$segundo_apellido = $_POST["segundo_apellido"];
			}else{
				$segundo_apellido = '';
			}
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
			$direccion = $_POST["direccion"];

			$respuesta_usuarios = ModeloUsuarios::mdlActualizarDatosUsuario($tabla, $identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $celular, $municipio, $fecha_nacimiento, $correo_electronico, $bono, $condiciones, $_SESSION["id"], $direccion);

			$respuesta_generado = ModeloUsuarios::mdlActualizarGenerado($tablacodigo, $_SESSION["id"]);
			
			if($respuesta_usuarios == 'ok' and $respuesta_generado == 'ok'){
				?>
				<script type="text/javascript">
					$('#myModalPremio').modal('hide');
					$('#myModalCodigo').modal('show');
					var intro = document.getElementById('divinicial');
					intro.style.display = 'inline';
				</script>
				<?php
				$destinatario = "adrianfelipearroyave@gmail.com"; 
				$asunto = "Este mensaje es de prueba"; 
				$cuerpo = ' 
				<html> 
				<head> 
				   <title>Prueba de correo</title> 
				</head> 
				<body> 
				<h1>Hola amigos!</h1> 
				<p> 
				<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
				</p> 
				</body> 
				</html> 
				'; 

				//para el envío en formato HTML 
				$headers = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

				$mail = mail($destinatario,$asunto,$cuerpo,$headers);
	
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
	


