<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$consulta = $query->ConsultaAlerta('temperatura'); 
 
echo $consulta;
?>
