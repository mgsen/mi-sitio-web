<?php

include("conexion.php");
// Verificamos si el formulario se envió
if (isset($_POST['iniciar'])) {
    //  Guardamos los valores que el usuario escribió en el formulario
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
      // Buscamos en la tabla usuarios si existe ese nombre y contraseña

     $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre' AND contrasena = '$contrasena'";
       $resultado = $conexion->query($sql);

       // Si encontró al menos una fila, significa que el usuario existe
    if ($resultado->num_rows > 0) {
        echo "<h3>Bienvenido/a, $nombre </h3>";
        echo "<a href='index.php'>Ir a la página principal</a>";
    } else {
        echo "<h3>Usuario o contraseña incorrectos </h3>";
        echo "<a href='iniciarsesion.php'>Intentar de nuevo</a>";
    }

    //Cerramos la conexión
    $conexion->close();
}
?>