<?php
	require("../modelo/Conexion.php");

	$query = new Conexion();
	$consulta = $query->Consulta('lote');

	$tabla = "";

	if($consulta->num_rows > 0){
		$tabla.="<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center'><b>Lote</b></td>
							<td align='center'><b>Papas correctas</b></td>
							<td align='center'><b>Papas quemadas</b></td>
							<td align='center'><b>Total de latas</b></td>
						</tr>
					</thead>
					<tbody>";
		while($filaLote = $consulta->fetch_assoc()){
			$tabla.="<tr>
						<th scope='row'>".$filaLote['id']."</th>
						<td align='center'>".$filaLote['papaBuenEdo']."</td>
						<td align='center'>".$filaLote['papaMalEdo']."</td>
						<td align='center'>".$filaLote['lata']."</td>
					</tr>";
		}

		$tabla.="	</tbody>
				</table";
	}else{
		$tabla="SIN COINCIDENCIAS";
	}

	echo $tabla;

?>
