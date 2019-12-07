<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->ConsultaStatus();
 
$tabla = "";

if ($consulta->num_rows > 0) {
    $tabla .= "<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center' colspan='2'>
								<b>ESTADO ACTUAL</b>
							</td>
						</tr>
						<tr class='table-warning'>
							<td align='center'><b>Contador</b></td>
							<td align='center'><b>Maquinaria</b></td>
						</tr>
					</thead>
					<tbody>";
    while ($filamaq = $consulta->fetch_assoc()) {
        $tabla .= "<tr>
						<td align='center'>" . $filamaq['conteo'] . "</td>
						<td align='center'>" . $filamaq['nombre'] . "</td>
					</tr>";
    }

    $tabla .= "	</tbody>
				</table";
} else {
    $tabla = "<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center' colspan='2'>
								<b>ESTADO ACTUAL</b>
							</td>
						</tr>
						<tr class='table-warning'>
							<td align='center'><b>Contador</b></td>
							<td align='center'><b>Maquinaria</b></td>
						</tr>
					</thead>
					<tbody>
					</tbody>
					</table>";
}

echo $tabla;
?>




