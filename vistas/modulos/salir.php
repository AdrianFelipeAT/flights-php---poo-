<?php


$item = 'id';
$valor = $_SESSION["id"];
$usuarios = ControladorUsuarios::ctrTerminarSesion($item, $valor);


session_destroy();

echo '<script>

	window.location = "ingreso";

</script>';