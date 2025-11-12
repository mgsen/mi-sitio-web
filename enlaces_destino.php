<?php

include("conexion.php");

if (isset($_POST['registrarse'])) {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES ('$nombre', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        echo "<h3>Te has registrado con éxito ❤️</h3>";
        echo "<a href='iniciarsesion.php'>Iniciar sesión</a>";
    } else {
        echo "<h3>Error: " . $conexion->error . "</h3>";
    }

    $conexion->close();
}
?>
