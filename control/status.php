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
							<td align='center'><b>ID</b></td>
							<td align='center'><b>Contador</b></td>
							<td align='center'><b>Maquinaria</b></td>
                                                        <td align='center'><b>Fecha</b></td>
						</tr>
					</thead>
					<tbody>";
    while ($filamaq = $consulta->fetch_assoc()) {
        $tabla .= "<tr>
						<th scope='row'>" . $filamaq['id'] . "</th>
						<td align='center'>" . $filamaq['cont'] . "</td>
						<td align='center'>" . $filamaq['maquinaria'] . "</td>
                                                <td align='center'>" . $filamaq['fecha'] . "</td>
					</tr>";
    }

    $tabla .= "	</tbody>
				</table";
} else {
    $tabla = "SIN DATOS";
}

echo $tabla;
?>




