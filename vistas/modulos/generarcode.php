<?php

	require_once "../../modelos/conexion.php";
	require_once "../../constantes.php";

	$valor = "";
	$algo = "dd";
	$stmt = Conexion::conectar()->prepare("SELECT * FROM codigo where vendido = 0 and codigo != '".$codetestsc."' ORDER BY RAND() limit 1");

	$stmt -> execute();

	//return $stmt -> fetch();

	while($assoc_query = $stmt -> fetch()){
		$valor = $assoc_query['codigo'];
	}
	
	echo $valor;
		
?>

