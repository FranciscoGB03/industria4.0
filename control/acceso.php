<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$usuario = $_POST['user'];
$contra = $_POST['pass'];
$consulta = $query->ConsultaUsuario('usuario', 'Nombre="' . $usuario . '" and Contrasenia="' . $contra . '"');
$user = $consulta['Nombre'];
$pass = $consulta['Contrasenia'];
if (empty($user) || empty($pass)) {
    echo '<script>alert("los datos no son correctos");</script>';
    echo '<script>window.location="../index.php";</script>';
} else {
    echo '<script>alert("datos correctos, bienvenido");</script>';
    echo '<script>window.location="../inicio.php";</script>';
}
?>
