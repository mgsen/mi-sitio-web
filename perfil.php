                                                                                                                                                                                         <!DOCTYPE html>
<html lang="es"><!--Idioma-->
    <head>
        <meta charset="UTF-8"> <!--Codificación de caracteres-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--viewport: adapta a la página a dispositivos móviles - width=device-width: Ancho del viewport - initial-scale=1.0: Zoom inicial (1.0 = 100%)-->
        <meta name="description" content="Perfil del Oyente"><!--description: Descripción de la página que aparece en resultados de Google-->
        <meta name ="keywords" content="perfil, principal, oyente, musica, escuchar, público"><!--keywords: Palabras clave relacionadas con la página-->
        <title>Perfil del Oyente</title><!--Nombre de la página web-->
        <link rel="stylesheet" href="css/perfil.css"><!--Enlace al archivo CSS-->
    </head>
    <body>
        <div class="barra-de-navegacion"> <!--Div con clase "barra-de-navegacion"-->
            <nav> <!--Barra de navegación-->
                <ul class="logo-menu">
                    <img src="imagenes\bloomlogo.png" alt="BLOOM"> <!--Imagen del logo de BLOOM-->
                </ul>

                <ul class="menu"> <!--Lista desordenada con clase "menu"-->
                    <li><a href="index.php">Principal</a></li> <!--Elemento de lista con enlace a principal.php-->
      <li><a href="subircancion.php">+ Subir</a></li>
                </ul>

                <ul class="menu-iconos"> <!--Lista desordenada con clase "menu-iconos"--> 
            <a href="editarperfil.php">
                <img src="imagenes/configuracion.png" alt="Tuerca de configuración">
            </a>                </ul>
            </nav>
            
        </div>

        <div class="perfil-oyente-contenido"> <!--Div con clase "perfil-oyente-contenido"-->
            <div class="perfil">
                <img src="imagenes/perfil.png" alt="Perfil del Oyente" class="foto-perfil"> <!--Imagen de perfil con clase "foto-perfil"-->
                <div class="info-perfil"> <!--Div con clase "info-perfil"-->
                    <h1>NOMBRE DE USUARIO</h1>

                    <div class="estadisticas"> <!--Div con clase "estadisticas"-->
                        <div>
                            <h2>0</h2>
                            <p>Canciones</p>
                        </div>

                        <div>
                            <h2>0</h2>
                            <p>Seguidores</p>
                        </div>

                        <div>
                            <h2>0</h2>
                            <p>Seguidos</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="descripcion"> <!--Div con clase "descripcion"-->
                <p>Descripción (breve)</p>
            </div>


        </div>

        <div class="explorador"> <!--Div con clase "explorador"-->
            <div class="invitacion-explorar"> <!--Div con clase "explorar"-->
                <p>Mis canciones:</p>
            </div>
        </div>
                                                                                                                                                                                                                                   .subir{ /estilos para el botón de subir música/

    </body>
</html>