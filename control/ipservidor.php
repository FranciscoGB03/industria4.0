<?php

require_once '../modelo/Conexion.php';
echo "<script>console.log('agregando ip de servidor')</script>";
$query = new Conexion();
$tabla = 'servidor';
$campo = 'ip';
$valores =$_POST['ipServidor'];
$condicion="id=1";
try {
   
    $query->Update($tabla, $campo, '"'.$valores.'"',$condicion);    
    if($query==1){
       echo "<script>alert('ip servidor actualizada!')</script>"; 
       echo '<script>window.location="../pantallaServicio.php";</script>';
    }
} catch (Exception $ex) {
    
}
?>