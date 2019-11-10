<?php
	require("../modelo/Conexion.php");

	$query = new Conexion();
	$consulta = $query->ConsultaUsuario('lote', 'ID is not null');

	if(isset($_POST['lote'])){
		$consulta = $query->ConsultaUsuario('lote', 'ID=' .$_POST['lote'] );
	}

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
						<th scope='row'>".$filaLote['ID']."</th>
						<td align='center'>".$filaLote['PapasBuenEdo']."</td>
						<td align='center'>".$filaLote['PapasMalEdo']."</td>
						<td align='center'>".$filaLote['Latas']."</td>
					</tr>";
		}

		$tabla.="	</tbody>
				</table";
	}else{
		$tabla="SIN COINCIDENCIAS";
	}

	echo $tabla;

?>