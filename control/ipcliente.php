<?php

require_once '../modelo/Conexion.php';
echo "<script>console.log('agregando ip de cliente')</script>";
$query = new Conexion();
$tabla = 'cliente';
$campo = 'ip';
$valores =$_POST['ipCliente'];
$condicion="id=1";
try {
   
    $query->Update($tabla, $campo, '"'.$valores.'"',$condicion);    
    if($query==1){
       echo "<script>alert('ip actualizada!')</script>"; 
       echo '<script>window.location="../pantallaServicio.php";</script>';
    }
} catch (Exception $ex) {
    
}
?>
    



