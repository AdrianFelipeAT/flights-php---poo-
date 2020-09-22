<?php

class ControladorAsignar{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrAsignarCodigo(){

		if(isset($_POST["codigo"])){

			$codigo = $_POST["codigo"];

			$respuesta = ModeloAsignacion::mdlAsignarCodigo($codigo);

			if($respuesta == "ok"){

				echo '<br><div class="alert alert-success">Código Asignado con éxito</div>';

			}else{

				echo '<br><div class="alert alert-danger">Error al asignar, vuelve a intentarlo</div>';

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
	


