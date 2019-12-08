<?php
   require_once '../modelo/Conexion.php';
   $query=new Conexion();
   $tabla='cliente';
   $condition='id=1';
   $consulta=$query->ConsultaUsuario($tabla, $condition);   
   $ip=$consulta['ip'];
   $client = new SoapClient(null, 
    array('location'=>$ip, 
        'uri' => $ip,
        'trace'=>1 ));
   try{
    echo $return=$client->__soapCall("saludar",["Montse"]);
   }catch(SoapFault $f){
        //echo $f->getMessage().PHP_EOL;
        print($client->__getLastResponse());
   }
?>
