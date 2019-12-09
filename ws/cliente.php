<?php
   require_once '../modelo/Conexion.php';
   $query=new Conexion();
   $tabla='cliente';
   $condition='id=1';
   $consulta=$query->ConsultaUsuario($tabla, $condition);   
   $ip=$consulta['ip'];
   //obtencion del lote
   $consultalote=$query->ConsultaUltimoLote()->fetch_assoc();   
   $numLote=$consultalote['numLote'];   
   //obtencion de el numero de latas
   $numlatas=$query->ConsultaLataUltimoLote()->fetch_assoc();
   $latas=$numlatas['lata'];
   //configuracion del servicio web
   $client = new SoapClient(null, 
    array('location'=>$ip, 
        'uri' => $ip,
        'trace'=>1 ));
   try{
    $return=$client->__soapCall("datos",[$numLote,$latas]);
    if ($return==1){
        echo "<script>alert('envio de datos correctamente!')</script>";
        echo "<script>window.location='../pantallaServicio.php'</script>";        
    }else{
        echo "<script>alert('ocurrió un error, favor de checar su configuración!')</script>";
        echo "<script>window.location='../pantallaServicio.php'</script>";        
    }
    
   }catch(SoapFault $f){
        //echo $f->getMessage().PHP_EOL;
        print($client->__getLastResponse());
   }
?>
