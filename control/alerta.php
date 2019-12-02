<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$alerta = $query->ConsultaAlerta('temperatura'); 

if($alerta->num_rows > 0){
    echo $alerta;
}else{
    $alerta = "SIN DATOS";
}

?>