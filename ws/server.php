<?php
include 'MiClase.php';
echo 'estoy en el metodo de server.php';
try {
    echo "<h1>entre al try hola clau</h1>";
    $server = new SoapServer(
            null,array('uri' => 'http://192.168.207.11/servicios/server.php'));
    $server->setClass('Prueba');
    $server->handle();
} catch (SOAPFault $s) {
    print $s->faultstring;
}
