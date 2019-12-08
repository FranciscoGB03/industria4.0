<?php
        
   $direccion=$_POST['ip'];
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
