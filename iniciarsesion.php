<!DOCTYPE html> <!--le indica al navegador que el documento está escrito en HTML-->
<!--Ahora DOCTYPE indica de forma más precisa (en HTML5), pero en versiones más viejas, este era más largo-->
<!--Y ano aplica la versión, solo aplica el modo estandar del navegador y le comunica que el archivo usa elHTML moderno (HTML5)-->
<html lang="es"><!--Idioma-->
    <head>
        <meta charset="UTF-8"> <!--Codificación de caracteres-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--viewport: adapta a la página a dispositivos móviles - width=device-width: Ancho del viewport - initial-scale=1.0: Zoom inicial (1.0 = 100%)-->
        <meta name="description" content="Inicio de sesion"><!--description: Descripción de la página que aparece en resultados de Google-->
        <meta name ="keywords" content="sesion, cuenta, principal, musica, inicio, acceso"><!--keywords: Palabras clave relacionadas con la página-->
        <title>Inicio de sesion</title><!--Nombre de la página web-->
        <link rel="stylesheet" href="css/iniciarsesion.css">
    </head>
    <body>
       <div class="barra-de-navegacion"> <!--Div con clase "barra-de-navegacion"-->
            <nav class="menu">
                <img src="imagenes\bloom-lineal.png" alt="BLOOM"> <!--Imagen del logo de BLOOM-->
                <a href="sobrenosotras.php">Sobre Nosotras</a>   
            </nav>
        </div>
        <div class="contenido-form"> 
            <img src="imagenes/flor.png" alt="flor de bloom"> <!--Imagen decorativa de la flor del logo de bloom-->
            <h2>Inicia sesion en BLOOM</h2>

            <!--inicia formulario de inicio de sesion-->
            <form action="verificar_login.php" method="POST">
                <label for="usuario">Nombre de usuario:</label><!--Texto que muestra el nombre del campo y lo conecta con el input-->
                <input type="text" typ id="usuario" name="nombre" required> <!--Campo donde se escribe texto-->
                
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" minlength="8" placeholder="Mínimo 8 caracteres" required>
                
                <!-- type="password": tipo de dato (contraseña, oculta los caracteres)-->
             <input type="submit" value="Iniciar sesion" name="iniciar" class="boton">
            </form>
            <p>¿No tenés cuenta?</p>
            <a href="registro.php">Registrate ahora</a> <!--Enlace a la página de resgistro-->
        </div>
        <img src="imagenes/chico-auri.png" alt="chico con auriculares" class="chico"> <!--Imagen decorativa de un chico con auriculares-->
    </body>
</html>