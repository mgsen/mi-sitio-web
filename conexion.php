<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "bloom";

$conexion = new mysqli($servidor, $usuario, $clave, $base);

if ($conexion->connect_error) {
    die("Error al conectar: " . $conexion->connect_error);
}
?>
