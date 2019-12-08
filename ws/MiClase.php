<?php
require_once '../modelo/Conexion.php';
class Prueba{
    public function saludar($num){
        return 'hola'.$num;
    }
    public function ejemplo2($mensaje){
        return $mensaje;
    }
    public function datos($numLote, $cantPapaBuena){        
        $query=new Conexion();
        $tabla='lote';
        $campos='papaBuenEdo,numlote';
        $valores=$cantPapaBuena.",".$numLote;
        $resultado=$query->Insert($tabla, $campos, $valores);        
        return $resultado;
    }
}
?>