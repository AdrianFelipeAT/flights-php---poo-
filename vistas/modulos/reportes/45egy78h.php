<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "ReporteBonoRegalo.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

//$consulta = "SELECT identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, correo_electronico, municipio_residencia, fecha_nacimiento, acepto_politica, acepto_regalo, direccion, fecha, codigos.codigoseta as codigo_seguridad, codigos.id_bono_regalo as id_transaccion, productos.producto, codigos.observación FROM `cliente`, `codigos`, `productos` where cliente.id_codigo = codigos.id and codigos.id_producto_f = productos.id_producto_p";
?>
<table>
	<thead>
		<tr>
			<th> Identificación </th>
			<th> Primer Nombre </th>
			<th> Segundo Nombre </th>
			<th> Primer Apellido </th>
			<th> Segundo Apellido </th>
			<th> Celular </th>
			<th> Correo Electrónico </th>
			<th> Municipio de residencia </th>
			<th> Fecha de nacimiento </th>
			<th> Acepto Política </th>
			<th> Acepto regalo </th>
			<th> Dirección </th>
			<th> Fecha y hora de registro </th>
			<th> Codigo de seguridad </th>
			<th> Id de transacción </th>
			<th> Producto </th>
			<th> Tipo de cliente </th>
		</tr>
	</thead>
	<tbody>

	<?php

	$reporte = ControladorUsuarios::ctrObtenerReporte();
	if (is_array($reporte) || is_object($reporte)){
		foreach ($reporte as $key => $value) {
			echo '<tr>
				<td>'.$value["identificacion"].'</td>
				<td>'.$value["primer_nombre"].'</td>
				<td>'.$value['segundo_nombre'].'</td>
				<td>'.$value['primer_apellido'].'</td>
				<td>'.$value['segundo_apellido'].'</td>
				<td>'.$value['celular'].'</td>
				<td>'.$value['correo_electronico'].'</td>
				<td>'.$value['municipio_residencia'].'</td>
				<td>'.$value['fecha_nacimiento'].'</td>
				<td>'.$value['acepto_politica'].'</td>
				<td>'.$value['acepto_regalo'].'</td>
				<td>'.$value['direccion'].'</td>
				<td>'.$value['fecha'].'</td>
				<td>'.$value['codigo_seguridad'].'</td>
				<td>'.$value['id_transaccion'].'</td>
				<td>'.$value['producto'].'</td>
				<td>'.$value['tipo_cliente'].'</td>
			</tr>';
		}
	}else{
  		echo "Unfortunately, an error occured.";
	}
	?>

	</tbody>
</table>

