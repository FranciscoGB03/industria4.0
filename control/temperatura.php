<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->Consulta('temperatura');
 
$tabla = "";

if ($consulta->num_rows > 0) {
    $tabla .= "<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center'><b>ID</b></td>
							<td align='center'><b>Temperatura</b></td>
							<td align='center'><b>Estado</b></td>
						</tr>
					</thead>
					<tbody>";
    while ($filatemp = $consulta->fetch_assoc()) {
        $tabla .= "<tr>
						<th scope='row'>" . $filatemp['id'] . "</th>
						<td align='center'>" . $filatemp['temperatura'] . "</td>
						<td align='center'>" . $filatemp['estado'] . "</td>
					</tr>";
    }

    $tabla .= "	</tbody>
				</table";
} else {
    $tabla = "SIN DATOS";
}

echo $tabla;
?>
