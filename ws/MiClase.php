<?php
require_once '../modelo/Conexion.php';
class Prueba{
    public function saludar($num){
        return 'hola'.$num;
    }
    public function ejemplo2($mensaje){
        return $mensaje;
    }
    public function datos($numLote){
        $query=new Conexion();
        $query->Insert($tabla, $campos, $valores);
        
    }
}
?>