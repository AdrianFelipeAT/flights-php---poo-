<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "ReporteBonoRegalo.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
require_once "../../../../modelos/conexion.php";

$consulta = "SELECT identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, correo_electronico, municipio_residencia, fecha_nacimiento, acepto_politica, acepto_regalo, direccion, fecha, codigos.codigoseta as codigo_seguridad, codigos.id_bono_regalo as id_transaccion, productos.producto, codigos.observación FROM `cliente`, `codigos`, `productos` where cliente.id_codigo = codigos.id and codigos.id_producto_f = productos.id_producto_p"
$valor = "";
$stmt = Conexion::conectar()->prepare($consulta);

$stmt -> execute();

//return $stmt -> fetch();

?>
<table>
	<?php
		while($assoc_query = $stmt -> fetch()){
	?>
	<tbody>
	<tr>
	<th>
	<h2>Listado en tabla excel</h2>
	</th>
	</tr>
	<tr>
	<td><?php echo($assoc_query['identificacion']);?></td>
	
	</tr>
	</tbody>
	<?php } ?>
</table>