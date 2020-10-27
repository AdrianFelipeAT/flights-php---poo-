<?php
		session_start();
		require_once "modelos/conexion.php";
		$stmt = Conexion::conectar()->prepare("SELECT generado FROM codigos WHERE id = ".$_SESSION["id"]."");

		$stmt -> execute();

		while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
		  echo $fila["generado"].PHP_EOL;
		}

?>