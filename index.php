<!DOCTYPE html>
<html lang="es"><!--Idioma-->
    <head>
        <meta charset="UTF-8"> <!--Codificación de caracteres-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--viewport: adapta a la página a dispositivos móviles - width=device-width: Ancho del viewport - initial-scale=1.0: Zoom inicial (1.0 = 100%)-->
        <meta name="description" content="Principal"><!--description: Descripción de la página que aparece en resultados de Google-->
        <meta name ="keywords" content="principal, oyente, artista, musica, escuchar,subir, público"><!--keywords: Palabras clave relacionadas con la página-->
        <title>Principal</title><!--Nombre de la página web-->
        <link rel="stylesheet" href="css/index.css"><!--Enlace al archivo CSS-->
    </head>
    <body>
        <div class="barra-de-navegacion"> <!--Div con clase "barra-de-navegacion"-->

<nav> <!-- Barra de navegación -->
    <ul class="logo-menu">
        <li>
            <img src="imagenes/bloomlogo.png" alt="BLOOM"> <!-- Imagen del logo de BLOOM -->
        </li>
    </ul>


    <ul class="menu"> <!-- Lista desordenada con clase "menu" -->
        <li><a href="index.php">Principal</a></li>
        <li><a href="subircancion.php">+ Subir</a></li>
    </ul>
    <ul class="menu-iconos"> <!-- Lista desordenada con clase "menu-iconos" -->
        <li>
            <a href="perfil.php">
                <img src="imagenes/perfil.png" alt="Perfil del usuario">
            </a>
        </li>

    </ul>
</nav>
        </div>
        <div class="inicio">
                <img src="imagenes/BLOOM.png" alt="palabra bloom" class="bloom"> <!--Imagen con el nombre de la plataforma-->
                <div class="mensaje-inicial">   
                    <h3>DONDE LOS ARTISTAS FLORECEN...</h3> <!--slogan de bloom-->
                    <p>Descubrí artistas emergentes de tu zona y compartí tu sonido con el mundo.</p>
                </div>
            </div>
        </div>

        <div class="opciones"> <!--Div con clase "opciones"-->
            <!--Elemento de la primer fila-->
            <div class="fila-uno"> <!--Div para los apartados de me gusta y playlist-->  
                <a href="mismegustas.php">
                    <img src="imagenes/MG.png" alt="Me Gusta">
                    <p>Mis Me Gusta</p>
                </a>

                <a href="listasplaylist.php">
                    <img src="imagenes/playlist.png" alt="playlist">
                    <p>Mis Playlists</p>
                </a>
            </div>

             <!--Elemento de la segunda fila-->
            <div class="fila-dos"> <!--Div para los apartados de géneros musicales-->
                <a href="cumbia.php">
                    <img src="imagenes/cumbia21.png" alt="Cumbia">
                    <p>Cumbia</p>
                </a>

                <a href="pop.php">
                    <img src="imagenes/pop.png" alt="pop">
                    <p>POP</p>
                </a>

                <a href="rock.php">
                    <img src="imagenes/rock.png" alt="rock">
                    <p>Rock</p>
                </a>
            </div>

             <!--Elemento de la tercer fila-->
            <div class="fila-tres"> <!--Div para los apartados de me gusta y playlist-->  
                <a href="reggaeton.php">
                    <img src="imagenes/reggaeton.png" alt="reggaeton">
                    <p>Reggaeton</p>
                </a>

                <a href="rkt.php">
                    <img src="imagenes/rkt.png" alt="rkt">
                    <p>RKT</p>
                </a>

                <a href="jazz.php">
                    <img src="imagenes/jazz.png" alt="jazz">
                    <p>Jazz</p>
                </a>
            </div>  
        </div>
        <div class="info-imagen">
            <img src="imagenes/show-bloom.png" alt="show de una banda"> 
            <div class="info-corta">
                <p>Tu música encuentra espacio para crecer.</p>
                <p>Conectá con la gente que vibra como vos.</p>
            </div>
        </div>
        <img src="imagenes/guitarra.png" alt="guitarra decorativa" class="guitarra">
    </body>
</html>