<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->Consulta('maquinaria');
 
$tabla = "";

if ($consulta->num_rows > 0) {
    $tabla .= "<table class='table table-bordered table-hover'>
					<thead>
						<tr class='table-warning'>
							<td align='center'><b>ID</b></td>
							<td align='center'><b>Nombre</b></td>
							<td align='center'><b>Límite</b></td>
						</tr>
					</thead>
					<tbody>";
    while ($filamaq = $consulta->fetch_assoc()) {
        $tabla .= "<tr>
						<th scope='row'>" . $filamaq['id'] . "</th>
						<td align='center'>" . $filamaq['nombre'] . "</td>
						<td align='center'>" . $filamaq['limite'] . "</td>
					</tr>";
    }

    $tabla .= "	</tbody>
				</table";
} else {
    $tabla = "SIN DATOS";
}

echo $tabla;
?>


