<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->Consulta('status');
 
$tabla = "";

if ($consulta->num_rows > 0) {
    $tabla .= "<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center'><b>Contador</b></td>
							<td align='center'><b>Maquinaria</b></td>
                                                        <td align='center'><b>Fecha</b></td>
						</tr>
					</thead>
					<tbody>";
    while ($filamaq = $consulta->fetch_assoc()) {
        $tabla .= "<tr>
						<td align='center'>" . $filamaq['status.cont'] . "</td>
						<td align='center'>" . $filamaq['maquinaria.nombre'] . "</td>
                                                <td align='center'>" . $filamaq['status.fecha'] . "</td>
					</tr>";
    }

    $tabla .= "	</tbody>
				</table";
} else {
    $tabla = "SIN DATOS";
}

echo $tabla;
?>




