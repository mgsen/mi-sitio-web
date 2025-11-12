<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perfil del Oyente">
    <meta name="keywords" content="perfil, principal, oyente, musica, escuchar, público">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfilvisual.css">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="barra-de-navegacion">
        <nav>
            <ul class="logo-menu">
                <img src="imagenes/bloomlogo.png" alt="BLOOM">
            </ul>

            <ul class="menu">
                <li><a href="index.php">Principal</a></li>
                <li><a href="subircancion.php">+ Subir</a></li>
            </ul>

            <ul class="menu-iconos">
                <a href="editarperfil.php">
                    <img src="imagenes/configuracion.png" alt="Tuerca de configuración">
                </a>
            </ul>
        </nav>
    </div>

    <!-- Contenido del perfil -->
    <div class="perfil-oyente-contenido">
        <div class="perfil">
            <img src="imagenes/2artista.png" alt="Perfil del Oyente" class="foto-perfil">
            
            <div class="info-perfil">
                <h1>Lara Ray</h1>

                <div class="estadisticas">
                    <div>
                        <h2>4</h2>
                        <p>Canciones</p>
                    </div>
                    <div>
                        <h2>1292</h2>
                        <p>Seguidores</p>
                    </div>
                    <div>
                        <h2>102</h2>
                        <p>Seguidos</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Descripción centrada debajo del perfil -->
        <div class="descripcion">
            <p>✨ Lara Ray ✨<br>
            Cantante y compositora pop.<br>
            Subiendo a la cima con ritmo, emoción y verdad.<br>
            🎶 “Mi historia suena a pop y late como un sueño.” 💕</p>
        </div>

    </div>

    <!-- Sección "Mis canciones" -->
    <div class="explorador">
        <div class="invitacion-explorar">
            <p>Mis canciones</p>
            
        </div>
    </div>
      <div class="container-cancion">
    <img src="imagenes/artista1.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
        <a href="pop.php">
      <h3 class="titulo-cancion">Electric Heart</h3>
        </a>
      <p class="descripcion-cancion">
        Descripción: Un himno pop lleno de sintetizadores y energía eléctrica sobre enamorarse en una era digital.
        <br><br>    
        <br><br>
      </p>
    </div>
      </div>
          <div class="container-cancion">
    <img src="imagenes/chi.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
      <h3 class="titulo-cancion">Love</h3>
      <p class="descripcion-cancion">
        Descripción: Una CANCION pop conmovedora que explora las complejidades del amor joven y la búsqueda de conexión verdadera.
        <br><br>    
        <br><br>
      </p>
    </div>
          </div>

                    <div class="container-cancion">
    <img src="imagenes/megusta3.png" alt="Banda" class="foto-cancion">
    <div class="info-cancion">
        <a href="mismegustas.php">
      <h3 class="titulo-cancion">Echoes of Tomorrow</h3>
        </a>
      <p class="descripcion-cancion">
        Descripción: Pop futurista que mezcla melodías pegajosas con letras introspectivas sobre esperanza y cambio.
        <br><br>    
        <br><br>
      </p>
    </div>
          </div>
</body>
</html>
