<?php
include 'MiClase.php';
require_once '../modelo/Conexion.php';
//configuracion
   $query=new Conexion();
   $tabla='servidor';
   $condition='id=1';
   $consulta=$query->ConsultaUsuario($tabla, $condition);   
   $ip=$consulta['ip'];
   echo 'soy el servidor';
try {
    echo "<h1>entre al try hola</h1>";
    $server = new SoapServer(
            null,array('uri' => $ip));
    $server->setClass('Prueba');
    $server->handle();
} catch (SOAPFault $s) {
    print $s->faultstring;
}
