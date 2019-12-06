<?php
	require("../modelo/Conexion.php");

	$query = new Conexion();
	$consulta = $query->ConsultaLote();

	$tabla = "";

	if($consulta->num_rows > 0){
		$tabla.="<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center' colspan='4'>
								<b>LOTES REGISTRADOS</b>
							</td>
						</tr>
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
						<th scope='row'>".$filaLote['numLote']."</th>
						<td align='center'>".$filaLote['papaB']."</td>
						<td align='center'>".$filaLote['papaM']."</td>
						<td align='center'>".$filaLote['lata']."</td>
					</tr>";
		}

		$tabla.="	</tbody>
				</table";
	}else{
		$tabla="<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center' colspan='4'>
								<b>LOTES REGISTRADOS</b>
							</td>
						</tr>
						<tr class='table-warning'>
							<td align='center'><b>Lote</b></td>
							<td align='center'><b>Papas correctas</b></td>
							<td align='center'><b>Papas quemadas</b></td>
							<td align='center'><b>Total de latas</b></td>
						</tr>
					</thead>
					<tbody>
					</tbody>
					</table>";
	}

	echo $tabla;

?>
