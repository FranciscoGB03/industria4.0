<?php
include 'MiClase.php';
require_once '../modelo/Conexion.php';
//configuracion
   $query=new Conexion();
   $tabla='servidor';
   $condition='id=1';
   $consulta=$query->ConsultaUsuario($tabla, $condition);   
   $ip=$consulta['ip'];   
   //echo "<script>console.log('ip de servidor: ".$ip."')</script>";
try {    
    $server = new SoapServer(
            null,array('uri' => $ip));
    $server->setClass('Prueba');
    $server->handle();
} catch (SOAPFault $s) {
    print $s->faultstring;
}
