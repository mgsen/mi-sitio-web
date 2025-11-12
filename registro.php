<!DOCTYPE html>
<html lang="es"><!-- Define que el documento es HTML5 y el idioma principal es español -->
<head>
    <meta charset="UTF-8"><!-- Define la codificación de caracteres del documento (UTF-8) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Hace que la página sea responsive, adaptándose a dispositivos móviles -->
    <meta name="description" content="Registro de cuenta"><!-- Descripción de la página para buscadores -->
    <meta name="keywords" content="registro, cuenta, principal, musica, inicio, acceso"><!-- Palabras clave para buscadores -->
    <title>Registro de cuenta</title><!-- Título que aparece en la pestaña del navegador -->
    <link rel="stylesheet" href="css/registro.css"><!-- Vincula el archivo CSS externo para estilos -->
</head>
<body>
   <!-- Barra de navegación superior -->
   <div class="barra-de-navegacion"><!-- Contenedor principal de la barra de navegación -->
        <nav class="menu"><!-- Elemento semántico de navegación, contiene enlaces principales -->
            <img src="imagenes/bloom-lineal.png" alt="BLOOM"><!-- Logo de la plataforma, alt para accesibilidad -->
            <a href="sobrenosotras.php">Sobre nosotras</a><!-- Enlace a la página "Sobre nosotras" -->
        </nav>
    </div>

    <!-- Contenido principal del formulario de registro -->
    <div class="contenido-form"><!-- Contenedor del contenido del formulario -->
        <img src="imagenes/flor.png" alt="flor de bloom"><!-- Imagen decorativa relacionada con la marca -->
        <h2>Unite a BLOOM</h2><!-- Título principal del formulario -->

        <form action="enlaces_destino.php" method="POST"><!-- Formulario que envía los datos por POST al archivo PHP "enlaces_destino.php" -->
            <label for="nombre">Nombre de usuario:</label><!-- Etiqueta para el campo de nombre de usuario -->
            <input type="text" id="nombre" name="nombre" required><!-- Campo de texto para el nombre, obligatorio -->

            <label for="contrasena">Contraseña:</label><!-- Etiqueta para el campo de contraseña -->
            <input type="password" id="contrasena" name="contrasena" minlength="8" placeholder="Mínimo 8 caracteres" required><!-- Campo de contraseña, mínimo 8 caracteres y obligatorio -->

            <a href="politicas.php">Políticas de Privacidad y Condiciones de Uso</a><!-- Enlace a políticas de privacidad -->

           <input type="submit" value="Registrarse" name="registrarse" class="boton"><!-- Botón para enviar el formulario -->
        </form>

        <p>¿Ya tenés cuenta?</p><!-- Texto que pregunta si el usuario ya tiene cuenta -->
        <a href="iniciarsesion.php">Iniciá sesión ahora</a><!-- Enlace a la página de inicio de sesión -->
    </div>

    <!-- Imagen decorativa secundaria -->
    <img src="imagenes/chico-auri.png" alt="chico con auriculares" class="chico"><!-- Imagen decorativa, posicionable mediante CSS con la clase "chico" -->
</body>
</html>
