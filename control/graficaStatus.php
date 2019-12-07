<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->ConsultaStatus();
 
$array = array();

if ($consulta->num_rows > 0) {
    while ($filamaq = $consulta->fetch_assoc()) {
    	$point = array($filamaq['conteo']);
    	array_push($array, $point);
    }
}else{
	$point = array(0,0,0,0);
	array_push($array,$point);
}

echo json_encode($array);
?>
