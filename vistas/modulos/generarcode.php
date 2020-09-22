<?php

	require_once "../../modelos/conexion.php";
	require_once "../../constantes.php";

	$valor = "";
	$stmt = Conexion::conectar()->prepare("SELECT * FROM codigos where asignado = 0 and codigoacceso != '".$codetestsc."' ORDER BY RAND() limit 1");

	$stmt -> execute();

	//return $stmt -> fetch();

	while($assoc_query = $stmt -> fetch()){
		$valor = $assoc_query['codigoacceso'];
	}
	
	echo $valor;
		
?>

