<?php
   $client = new SoapClient(null, 
    array('location'=>"http://192.168.207.11/servicios/server.php", 
        'uri' => "http://192.168.207.11/servicios/server.php",
        'trace'=>1 ));
   try{
    echo $return=$client->__soapCall("saludar",["Montse"]);
   }catch(SoapFault $f){
        //echo $f->getMessage().PHP_EOL;
        print($client->__getLastResponse());

   }
?>
